<div class="w-full p-1 bg-base-100/80 backdrop-blur-lg">
  <div class="flex items-center justify-center gap-1 scale-95 md:scale-100 md:gap-2">
    <!-- Chapter list button -->
    <div class="tooltip" data-tip="Chapter list">
      <a id="backtomanga">
        <button class="btn btn-square btn-ghost">

          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </button>
      </a>
    </div>
    <!-- Add to favorite -->
    <div class="tooltip" data-tip="Add to favorite">
      <label type="button" class="swap btn btn-square btn-ghost">
        <input type="checkbox" name="" id="">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 swap-on" fill="#36d399" viewBox="0 0 24 24"
          stroke="#36d399" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 swap-off" fill="none" viewBox="0 0 24 24"
          stroke="currentColor" stroke-width="3">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
      </label>
    </div>
    <!-- Prev chapter button   -->
    <div class="tooltip" data-tip="Previous chapter">
      <a id="prev-chapter">

        <button id="prev-chapter-btn" class="btn btn-square btn-ghost">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
      </a>
    </div>
    <!-- select chapter -->
    <select  onchange="window.location.href=this.value;" id="select-chapter" class="text-base select select-ghost select-bordered select-sm focus:outline-none">
      
    </select>
    <!-- Next chapter button -->
    <div class="tooltip" data-tip="Next chapter">
      <a id="next-chapter">

        <button id="next-chapter-btn" class="btn btn-square btn-ghost">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </a>
    </div>

    <!-- scroll to top button -->
    <button id="scrollToTopBtn" class="btn btn-square btn-ghost">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        stroke-width="3">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
      </svg>
    </button>
  </div>
</div>