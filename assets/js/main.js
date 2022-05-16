const username = 'Demond_Corkery'
const password = 'hC7wQ7DAnFvFMXa'


const MFA = require('mangadex-full-api');
MFA.login(username, password, './bin/.md_cache').then(async () => {
  const pathArray = window.location.pathname.split('/');
  const endPath = pathArray[pathArray.length - 1];
  console.log(endPath);
  // Get all tag 
  let allTag = await MFA.Manga.getAllTags();
  var tagList = document.getElementById('tag-list');
  for (let tag of allTag) {
    let tagItem = document.createElement('div')
    tagItem.classList.add('tag-item', 'inline-block')
    tagItem.innerHTML = `
    <a href="search.php?tag=${tag.id}">${tag.name}</a>
    `
    tagList.appendChild(tagItem);
  };
  console.log('get tag');
  switch (endPath) {
    case 'index.php':
      // Get Suggestive Manga
      let mangaList = await MFA.Manga.search({
        limit: 20,
        order: {
          followedCount: 'desc'
        },
      });
      for (let manga of mangaList) {
        let swiper = document.getElementById('swiper');
        let swiperItem = document.createElement('div');
        swiperItem.classList.add('swiper-slide');
        let image_src = await MFA.Cover.get(manga.mainCover.id)
        swiperItem.innerHTML = `
        <div class="swiper-item">
          <!-- img left -->
          <div class="swiper-item-left flex overflow-hidden">
            <a href="manga.php?id=${manga.id}">
              <img class="object-cover w-full h-full"
                  src="${image_src.image256}" alt="${manga.title}">
            </a>
          </div>
          <!-- text right  -->
          <div class="swiper-item-right">
            <!-- manga title -->
            <a href="manga.php?id=${manga.id}" class="swiper-item-title" title="${manga.title}">${manga.title}</a>
            <div></div>
            <!-- desc -->
            <p class="swiper-item-desc">
              ${manga.description}
            </p>
          </div>
        </div>
        `
        swiper.appendChild(swiperItem);
      };
      //Get lastest update manga
      let lastestManga = await MFA.Manga.search({
        limit: 24,
        order: {
          updatedAt: 'desc',
        }
      });
      let moiCapNhat = document.getElementById('moicapnhat')
      for (let manga of lastestManga) {
        console.log(manga);
        let mangaItem = document.createElement('div')
        mangaItem.classList.add('truyen')
        let image_src = await MFA.Cover.get(manga.mainCover.id)
        mangaItem.innerHTML = `
            <a href="manga.php?id=${manga.id}">
              <div class="overflow-hidden rounded">
                <img class="manga-cover" src="${image_src.image256}" alt="">
              </div>
              <div class="manga-title" title="${manga.title}">
                ${manga.title}
              </div>
              
            </a>`;
        
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
        let tagItem = document.createElement('div');
        tagItem.innerHTML = `<a class="inline-block badge" href="search.php?tag=${tag.id}">${tag.name}</a>`
        document.getElementById('tag').appendChild(tagItem);
      }
      // get description
      document.getElementById('desc').innerText = manga.description ? manga.description : '';
      
      // get stactic data
      let staticData = await MFA.Manga.getStatistics(manga.id);
      document.getElementById('rating').innerText = staticData.rating.average ? staticData.rating.average.toFixed(1) : 'N/A';
      document.getElementById('follows').innerText = staticData.follows;
      // Get the manga's chapters:
      let chapters = await manga.getFeed({
        translatedLanguage: ['en'],
        order: {
          chapter: 'desc'
        }
      }, true);
      if (chapters.length > 0) {
        // read btn 
        document.getElementById('read-btn').href = `chapter.php?id=${chapters[chapters.length-1].id}`;
        for (let chapter of chapters) {
          let chapterItem = document.createElement('div');
          chapterItem.classList.add('grid','grid-cols-4','bg-base-200','p-1','m-2', 'px-2', 'hover:border-l-2' ,'border-primary');
          chapterItem.innerHTML = `
            <div class="col-span-3">
              <a class="block hover:text-primary font-semibold" href="chapter.php?id=${chapter.id}">
                Chapter ${chapter.chapter ? chapter.chapter :''} ${chapter.title ?': ' + chapter.title : ''}  <a/>
            </div>
            <div class="flex items-center gap-1 justify-end text-sm">
              <i class="fa-regular fa-clock"></i>
              <div>${chapter.publishAt.toLocaleDateString('en-GB')}</div>
            </div>`
          
          let chapterList = document.getElementById('chapter-list');
      
          chapterList.appendChild(chapterItem);
       
        }
      } else {
        document.getElementById('chapter-list').innerText = 'No chapters yet';
      }
      break;
    case 'chapter.php':
      //Get chapter
      const chapterqueryString = window.location.search;
      const chapterUrlParams = new URLSearchParams(chapterqueryString);
      const chapterId = chapterUrlParams.get('id');
      let chapter = await MFA.Chapter.get(chapterId);
      let mangaInfo = await MFA.Manga.get(chapter.manga.id);
      document.getElementById('title').innerText = chapter.chapter?'Chapter '+chapter.chapter:chapter.title;
      let chapterList = await MFA.Manga.getFeed(mangaInfo.id,{
        translatedLanguage: ['en'],
        order: {
          chapter: 'asc'
        }
      });
      // console.log(chapterList);
      document.getElementById('info').innerHTML = `
        <a href="manga.php?id=${mangaInfo.id}" class="text-xl font-semibold md:text-2xl text-secondary">
        ${mangaInfo.title}</a>
        <div class="flex-col">
          <div class="font-medium md:text-lg">${chapter.chapter?'Chapter '+chapter.chapter:chapter.title}</div>
          <div class="text-sm italic">Cập nhật: ${chapter.publishAt.toLocaleString('en-GB')}</div>
        </div>
      `
      let pages = await chapter.getReadablePages('saver');
      for (let page of pages) {
        let pageItem = document.createElement('div');
        pageItem.innerHTML = `<img src="${page}" alt="" loading="lazy">`
        document.getElementById('page-list').appendChild(pageItem);
      }
      for(let i=0; chapterList.length-1;i++){
          console.log(chapterList[i])
          // let chapterItem = document.createElement('option');
          // if(chapterId === chapterList[i].id){
          //   chapterItem = new Option('','',false,true)
          // }
          // chapterItem.value = `chapter.php?id=${chapterList[i].id}`
          // chapterItem.innerText = chapterList[i].chapter ? 'Chapter '+ chapterList[i].chapter : chapterList[i].title
          // document.getElementById('select-chapter').appendChild(chapterItem);
          if(chapterId === chapterList[i].id){
            let prevChapter = i-1;
            let nextChapter = i+1;
            document.getElementById('prev-chapter').href= `chapter.php?id=${chapterList[prevChapter].id}`
            document.getElementById('next-chapter').href= `chapter.php?id=${chapterList[nextChapter].id}`

          }
          
      }
      
      document.getElementById('backtomanga').href = `manga.php?id=${mangaInfo.id}#chapter-list`
      break;
    case 'search.php':
      const queryString1 = window.location.search;
      const urlParams1 = new URLSearchParams(queryString1);
      let keyword = urlParams1.get('s')
      let tag = urlParams1.get('tag')
      console.log(keyword)
      if (keyword) {
        var search_mangas = await MFA.Manga.search({
          title: keyword,
          limit: 24,
          order: {
            relevance: 'desc'
          }
        });
        document.getElementById('searchbar').value = keyword;
        document.getElementById('search-info').innerHTML = `<div class="text-lg font-semibold">Kết quả tìm kiếm cho "${keyword}"</div>`;

      } else {
        var search_mangas = await MFA.Manga.search({
          includedTags: [tag],
          limit: 24,
          order: {
            relevance: 'desc'
          }
        });
        tagInfo = (await MFA.Manga.getTag(tag)).name;
        console.log(tagInfo)
        document.getElementById('search-info').innerHTML = `<div class="text-3xl font-semibold">${tagInfo}</div>`;
      }
      if (search_mangas.length > 0) {
        let results = document.getElementById('search-results')
        for (let search_manga of search_mangas) {
          let mangaItem = document.createElement('div')
          mangaItem.classList.add('truyen')
          let image_src = await MFA.Cover.get(search_manga.mainCover.id)
          mangaItem.innerHTML = `
            <a href="manga.php?id=${search_manga.id}">
              <div class="overflow-hidden rounded">
                <img class="manga-cover" src="${image_src.image256}" alt="${search_manga.title}">
              </div>
              <div class="manga-title">
                ${search_manga.title}
              </div>
            </a>`;
          // <div class="flex items-center justify-between">
          //         <span class="">Ch. ${manga.lastChapter}</span>
          //         <time class="text-sm text-gray-500">${manga.updatedAt.toLocaleDateString()}</time>
          //       </div>
          results.appendChild(mangaItem)
        }
      }
      else{
        document.getElementById('search-results').innerHTML = `<div class="text-lg col-span-full">Không tìm thấy kết quả nào cho "${keyword}" </div>`
      }
      break;
  }


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