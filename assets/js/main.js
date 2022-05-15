const username = 'Demond_Corkery'
const password = 'hC7wQ7DAnFvFMXa'


const MFA = require('mangadex-full-api');
MFA.login(username, password, './bin/.md_cache').then(async () => {
  const pathArray = window.location.pathname.split('/');
  const endPath = pathArray[pathArray.length - 1];
  console.log(endPath);
  switch (endPath) {
    case 'index.php':
      let mangas = await MFA.Manga.search({
        limit: 24,
        order: {
          updatedAt: 'desc'
        }
      });
      //TRUYEN MOI CAP NHAT
      let moiCapNhat = document.getElementById('moicapnhat')
      for (let manga of mangas) {
        let mangaItem = document.createElement('div')
        mangaItem.classList.add('truyen')
        let image_src = await MFA.Cover.get(manga.mainCover.id)
        mangaItem.innerHTML = `
            <a href="manga.php?id=${manga.id}">
              <div class="overflow-hidden rounded">
                <img class="manga-cover" src="${image_src.image256}" alt="">
              </div>
              <div class="manga-title">
                ${manga.title}
              </div>
            </a>
            `;
        // <div class="flex items-center justify-between">
        //         <span class="">Ch. ${manga.lastChapter}</span>
        //         <time class="text-sm text-gray-500">${manga.updatedAt.toLocaleDateString()}</time>
        //       </div>
        moiCapNhat.appendChild(mangaItem)
      }
      break;
    case 'manga.php':
      //Get  manga
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      const id = urlParams.get('id')
      let manga = await MFA.Manga.get(id);
      // get title
      Array.from(document.getElementsByClassName('title')).forEach(item => item.innerHTML = manga.title);
      // get alt title
      if (manga.altTitles[0]) {
        document.getElementById('alt-title').innerText = manga.altTitles[0];
      }
      //get cover banner
      let image_src = await MFA.Cover.get(manga.mainCover.id);
      document.getElementById('manga-cover').innerHTML = `<img id="manga-cover" class="object-cover object-center w-full h-full aspect-truyen" src="${image_src.image256}">`
      document.getElementById('banner').innerHTML = `
        <div class="w-full h-full bg-fixed bg-center bg-no-repeat bg-cover -z-10" style="background-image:url('${image_src.image256}')">
        </div>
        `
      // get authors
      let authors = await MFA.Author.get(manga.authors[0].id);
      document.getElementById('author').innerHTML = `<div>${authors.name}</div>`;
      // get Tag 
      for (let tag of manga.tags) {
        let tagItem = document.createElement('a');
        tagItem.classList.add('badge', 'inline-block')
        tagItem.href = '/tag/' + tag.id;
        tagItem.innerHTML = tag.name;
        document.getElementById('tag').appendChild(tagItem);
      }
      // get description
      document.getElementById('desc').innerText = manga.description;
      // get stactic data
      let staticData = await MFA.Manga.getStatistics(manga.id);
      document.getElementById('rating').innerText = staticData.rating.average.toFixed(1) ? staticData.rating.average.toFixed(1) : 'N/A';
      document.getElementById('follows').innerText = staticData.follows;
      // Get the manga's chapters:
      let chapters = await manga.getFeed({
        order: {
          chapter: 'desc'
        }
      }, true);
      if (chapters) {
        for (let chapter of chapters) {
          let chapterItem = document.createElement('div');
          chapterItem.innerHTML = `
              <a class="p-2 hover:border-l-2 border-primary flex" href="/chapter.php/${chapter.id}">
                Chapter ${chapter.chapter ? chapter.chapter :''}: ${chapter.title? chapter.title : ''}
              <a/>`
          let chapterTime = document.createElement('div');
          chapterTime.innerHTML = `
              <div class="flex p-2 items-center gap-1 justify-end">
                <i class="fa-regular fa-clock"></i>
                <span>${chapter.publishAt.toLocaleDateString('en-GB')}</span>
              </div>`
          let chapterList = document.getElementById('chapter-list');
          let chapterStat = document.getElementById('chapter-stat');
          chapterList.appendChild(chapterItem);
          chapterStat.appendChild(chapterTime);
        }
      } else {
        document.getElementById('chapter-list-container').innerHTML = `<div class="text-center">No chapters</div>`;
      }
      break;
    case 'random.php':
      //Get random manga
      let random = await MFA.Manga.getRandom('safe');
      // get title
      Array.from(document.getElementsByClassName('title')).forEach(item => item.innerHTML = random.title);
      // get alt title
      if (random.altTitles[0]) {
        document.getElementById('alt-title').innerHTML = random.altTitles[0];
      }
      //get cover banner
      let random_img_src = await MFA.Cover.get(random.mainCover.id);
      document.getElementById('manga-cover').innerHTML = `<img id="manga-cover" class="object-cover object-center w-full h-full aspect-truyen" src="${random_img_src.image256}">`
      document.getElementById('banner').innerHTML = `
        <div class="w-full h-full bg-fixed bg-center bg-no-repeat bg-cover -z-10" style="background-image:url('${random_img_src.image256}')">
        </div>
        `
      // get authors
      let random_authors = await MFA.Author.get(random.authors[0].id);
      document.getElementById('author').innerHTML = `<div>${random_authors.name}</div>`;
      // get Tag 
      for (let tag of random.tags) {
        let tagItem = document.createElement('a');
        tagItem.classList.add('badge', 'inline-block')
        tagItem.href = '/tag/' + tag.id;
        tagItem.innerHTML = tag.name;
        document.getElementById('tag').appendChild(tagItem);
      }
      // get description
      document.getElementById('desc').innerText = random.description;
      // get stactic data
      let random_stat = await MFA.Manga.getStatistics(random.id);
      document.getElementById('rating').innerText = random_stat.rating.average.toFixed(1);
      document.getElementById('follows').innerText = random_stat.follows;
      // Get the random's chapters:
      let random_chapters = await random.getFeed({
        order: {
          chapter: 'desc'
        }
      }, true);
      if (random_chapters) {
        for (let chapter of random_chapters) {
          let chapterItem = document.getElementById('chapter-list');
          chapterItem.innerHTML = `
              <a class="p-2 hover:border-l-2 border-primary flex" href="/chapter.php/${chapter.id}">
                Chapter ${chapter.chapter ? chapter.chapter :''}: ${chapter.title? chapter.title : ''}
              <a/>`
          let chapterTime = document.createElement('div');
          chapterTime.innerHTML = `
              <div class="flex p-2 items-center gap-1 justify-end">
                <i class="fa-regular fa-clock"></i>
                <span>${chapter.publishAt.toLocaleDateString('en-GB')}</span>
              </div>`
          let chapterList = document.getElementById('chapter-list');
          let chapterStat = document.getElementById('chapter-stat');
          chapterList.appendChild(chapterItem);
          chapterStat.appendChild(chapterTime);
        }
      } else {
        document.getElementById('chapter-list-container').innerHTML = `<div class="text-center">No chapters</div>`;
      }
      break;
  }

  // Get all tag 
  let allTag = await MFA.Manga.getAllTags();
  var tagList = document.getElementById('tag-list');
  for (let i = 0; i <= 20; i++) {
    let tagItem = document.createElement('div')
    tagItem.innerHTML = `
    <a href="/tag/${allTag[i].id}" class="tag-item">${allTag[i].name}</a>
    `
    tagList.appendChild(tagItem);
  };
}).catch(console.error);



//Show/hide navbar on click
function openSidebar() {
  document.querySelector('.sidebar').classList.toggle('-left-80');
  document.querySelector('.overlay').classList.toggle('hidden');
}
// toggle searchbar
function toggleSearchbar() {
  document.querySelector('.searchbar').classList.toggle('hidden');
  console.log('toggle searchbar');
}