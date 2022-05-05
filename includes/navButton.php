<div class="p-1 w-full bg-base-200/90 backdrop-blur-xl">
  <div class="scale-95 md:scale-100 flex items-center md:gap-2 justify-center">
    <!-- Chapter list button -->
    <div class="tooltip" data-tip="Chapter list">
      <button type="button" class="btn btn-square btn-ghost">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </button>
    </div>
    <!-- Add to favorite -->
    <div class="tooltip" data-tip="Add to favorite">
      <label type="button" class="swap btn btn-square btn-ghost">
        <input type="checkbox" name="" id="">
        <svg xmlns="http://www.w3.org/2000/svg" class="swap-on  h-6 w-6" fill="#36d399" viewBox="0 0 24 24" stroke="#36d399" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="swap-off h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
      </label>
    </div>
    <!-- Prev chapter button   -->
    <div class="tooltip" data-tip="Previous chapter">
      <button class="btn btn-square btn-ghost">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
    </div>
    <!-- select chapter -->
    <select class="select select-ghost select-bordered scale-90 text-base focus:outline-none">
      <option selected>Chapter 1</option>
      <option>Chapter 2</option>
      <option>Chapter 3</option>
      <option>Chapter 4</option>
      <option>Chapter 5</option>
      <option>Chapter 6</option>
    </select>
    <!-- Next chapter button -->
    <div class="tooltip" data-tip="Next chapter">
      <button class="btn btn-square btn-ghost">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
    
    <!-- scroll to top button -->
    <button id="scrollToTopBtn" class="btn btn-square btn-ghost">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
  <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
</svg>
</button>
  </div>
</div>