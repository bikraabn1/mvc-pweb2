<nav class="flex flex-row justify-between items-center p-4 bg-base-300">
  <div>
    <a class="btn btn-ghost text-xl">Manajemen Buku</a>
  </div>
  <div class="flex flex-grow-0">
    <label class="grid cursor-pointer place-items-center">
      <input
        type="checkbox"
        value="black"
        class="toggle theme-controller bg-base-content col-span-2 col-start-1 row-start-1"
      />
      <svg
        class="stroke-base-100 fill-base-100 col-start-1 row-start-1"
        xmlns="http://www.w3.org/2000/svg"
        width="14"
        height="14"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <circle cx="12" cy="12" r="5" />
        <path
          d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4"
        />
      </svg>
      <svg
        class="stroke-base-100 fill-base-100 col-start-2 row-start-1"
        xmlns="http://www.w3.org/2000/svg"
        width="14"
        height="14"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
      </svg>
    </label>
    <ul class="menu menu-horizontal px-1 flex space-x-2">
      <li><a href="/" class="text-base-content">Home</a></li>
      <li>
        <details>
          <summary class="text-base-content">Action</summary>
          <ul
            class="bg-base-100 rounded-md p-2 w-max z-[9999] absolute right-0"
          >
            <li>
              <a href="/newBook" class="text-base-content"
                >Tambah Buku Baru</a
              >
            </li>
            <li>
              <a href="/kategori" class="text-base-content"
                >List Kategori Buku</a
              >
            </li>
            <li>
              <a href="/newCategory" class="text-base-content"
                >Tambah Kategori</a
              >
            </li>
            <li>
              <a href="/newPinjam" class="text-base-content">Pinjam Buku</a>
            </li>
            <li>
              <a href="/peminjaman" class="text-base-content"
                >List Peminjaman Buku</a
              >
            </li>
          </ul>
        </details>
      </li>
    </ul>
  </div>
</nav>