const _0x4dd06a=_0x5438;function _0x5438(_0x473e15,_0x527409){const _0x5d4b1b=_0x5d4b();return _0x5438=function(_0x54386a,_0x337c1b){_0x54386a=_0x54386a-0xd3;let _0x24ac0c=_0x5d4b1b[_0x54386a];return _0x24ac0c;},_0x5438(_0x473e15,_0x527409);}(function(_0x411a73,_0x36be0e){const _0x29a07e=_0x5438,_0x1dcc38=_0x411a73();while(!![]){try{const _0x23ef0e=-parseInt(_0x29a07e(0xda))/0x1+-parseInt(_0x29a07e(0xd7))/0x2+parseInt(_0x29a07e(0xdc))/0x3*(-parseInt(_0x29a07e(0xd4))/0x4)+-parseInt(_0x29a07e(0xde))/0x5+-parseInt(_0x29a07e(0xd5))/0x6*(parseInt(_0x29a07e(0xdd))/0x7)+-parseInt(_0x29a07e(0xd8))/0x8+-parseInt(_0x29a07e(0xdb))/0x9*(-parseInt(_0x29a07e(0xd9))/0xa);if(_0x23ef0e===_0x36be0e)break;else _0x1dcc38['push'](_0x1dcc38['shift']());}catch(_0x3ab7ab){_0x1dcc38['push'](_0x1dcc38['shift']());}}}(_0x5d4b,0x7caeb));function _0x5d4b(){const _0x4316f7=['286115qGfqzQ','Demond_Corkery','5732pVSusZ','99612mIaOmM','hC7wQ7DAnFvFMXa','354742wAjIBv','2037104aJfuWC','120ESYWkV','922896DwLSmp','1564380yjyXCH','237mjGZKd','21RMkUWH'];_0x5d4b=function(){return _0x4316f7;};return _0x5d4b();}const username=_0x4dd06a(0xd3),password=_0x4dd06a(0xd6);


const MFA = require('mangadex-full-api');
MFA.login(username, password, './bin/.md_cache').then(async () => {
  const pathArray = window.location.pathname.split('/');
  const endPath = pathArray[pathArray.length - 1];
  console.log(endPath);
  // Get all tag 
  let allTag = await MFA.Manga.getAllTags();
  var tagList = document.getElementById('tag-list');
  var tagList2 = document.getElementById('tag-sidebar')
  for (let tag of allTag) {
    let tagItem = document.createElement('div')
    let tagItem2 = document.createElement('div')
    tagItem.classList.add('tag-item', 'inline-block')
    // tagItem2.classList.add('tag-item');
    tagItem.innerHTML = `
    <a href="search.php?tag=${tag.id}">${tag.name}</a>
    `
    tagItem2.innerHTML = `
    <a href="search.php?tag=${tag.id}">${tag.name}</a>
    `
    tagList.appendChild(tagItem);
    tagList2.appendChild(tagItem2);
  };
  switch (endPath) {
    case 'index.php':
      // Get Suggestive Manga
      let mangaList = await MFA.Manga.search({
        limit: 9,
        order: {
          followedCount: 'desc'
        },
        offset: 1,
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
        limit: 25,
        order: {
          updatedAt: 'desc',
        },
        contentRating: ['safe'],
      });
      console.log(lastestManga)
      let moiCapNhat = document.getElementById('moicapnhat')
      for (let manga of lastestManga) {

        let mangaItem = document.createElement('div')
        mangaItem.classList.add('truyen')
        if(!manga.mainCover){
          continue
        }
        let image_src = await MFA.Cover.get(manga.mainCover.id)
        console.log(manga.mainCover);
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
      console.log(id);
      var manga = await MFA.Manga.get(id);
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
      document.getElementById('desc').innerHTML = 
      `<div class="whitespace-pre-line element" data-config='{ "type": "text", "limit": 120, "more": "→ show more", "less": "← less"}'>             
        ${manga.description ? manga.description : ''} 
      </div>`;
      
      // get stactic data
      let staticData = await MFA.Manga.getStatistics(manga.id);
      document.getElementById('rating').innerText = staticData.rating.average ? staticData.rating.average.toFixed(1) : 'N/A';
      document.getElementById('follows').innerText = staticData.follows;
      // Get the manga's chapters:
      let chapters = await manga.getFeed({
        translatedLanguage: ['en'],
        order: {
          chapter: 'asc'
        }

      }, true);
      if (chapters.length > 0) {
        // read btn 
        document.getElementById('read-btn').href = `chapter.php?id=${chapters[chapters.length-1].id}`;
        for (let chapter of chapters) {
          if(!chapter.isExternal){
            let chapterItem = document.createElement('div');
            chapterItem.classList.add('grid','grid-cols-4','bg-base-200','p-1','my-2', 'px-2', 'hover:border-l-2' ,'border-primary');
            chapterItem.innerHTML = `
              <div class="col-span-3">
                <a class="block hover:text-primary-focus font-semibold" href="chapter.php?id=${chapter.id}">
                  Chapter ${chapter.chapter ? chapter.chapter :''} ${chapter.title ?': ' + chapter.title : ''}  <a/>
              </div>
              <div class="flex items-center gap-1 justify-end text-sm">
                <i class="fa-regular fa-clock"></i>
                <i>${chapter.publishAt.toLocaleDateString('en-GB')}</i>
              </div>`
            
            let chapterList = document.getElementById('chapter-list');
        
            chapterList.appendChild(chapterItem);
          }
       
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
      console.log(chapter.manga.id);
      let mangaInfo = await MFA.Manga.get(chapter.manga.id);
      document.getElementById('title').innerText = chapter.chapter?'Chapter '+chapter.chapter:chapter.title;
      let chapterList = await mangaInfo.getFeed({
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
      document.getElementById('backtomanga').href = `manga.php?id=${mangaInfo.id}#chapter-list`
      var inChapterList = [];
      for(let chapter of chapterList){
        if(!chapter.isExternal){
          inChapterList.push(chapter)
        }
      }

      for(let i=0; inChapterList.length-1;i++){
          let chapterItem = document.createElement('option');
          if(chapterId === inChapterList[i].id){
            chapterItem = new Option('','',false,true)
          }
          chapterItem.value = `chapter.php?id=${inChapterList[i].id}`
          chapterItem.innerText = inChapterList[i].chapter ? 'Chapter '+ inChapterList[i].chapter : inChapterList[i].title
          document.getElementById('select-chapter').appendChild(chapterItem);
          if(chapterId === inChapterList[i].id){
            if(i==0){
              document.getElementById('prev-chapter-btn').classList.add('btn-disabled');
            }
            else{
              let prevChapter = i-1
              document.getElementById('prev-chapter').href= `chapter.php?id=${inChapterList[prevChapter].id}`
            }
            if(i==inChapterList.length-1){
              document.getElementById('next-chapter-btn').classList.add('btn-disabled');
            }
            else{
              let nextChapter = i+1;
              document.getElementById('next-chapter').href= `chapter.php?id=${inChapterList[nextChapter].id}`
            }
          }
      }
      
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
        

      } else {
        var search_mangas = await MFA.Manga.search({
          includedTags: [tag],
          limit: 24,
          order: {
            relevance: 'desc'
          }
        });
        tagInfo = (await MFA.Manga.getTag(tag)).name;
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
  toggleOverlay();
}
// category sidebar
function openTagSidebar() {
  document.getElementById('tag-sidebar').classList.toggle('-left-80');
  toggleOverlay2();
}
function toggleOverlay() {
    document.querySelector('.overlay').classList.toggle('hidden');
}
function toggleOverlay2() {
    document.querySelector('.overlay2').classList.toggle('hidden');
}
// toggle searchbar
function toggleSearchbar() {
  document.querySelector('.searchbar').classList.toggle('hidden');
  console.log('toggle searchbar');
}
