<div class="dashboard__header py-3 lg:py-4 px-4 lg:px-8 flex items-center justify-between w-full bg-white">
    <div class="dash__search w-full relative">
        <form action="" class="flex items-center justify-start w-full">
            <input type="text" placeholder="Search" class="w-full rounded-md h-10 pl-10 pr-3  text-sm">
            <button type="submit"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4ZM2 8C2 4.68629 4.68629 2 8 2C11.3137 2 14 4.68629 14 8C14 9.29583 13.5892 10.4957 12.8907 11.4765L17.7071 16.2929C18.0976 16.6834 18.0976 17.3166 17.7071 17.7071C17.3166 18.0976 16.6834 18.0976 16.2929 17.7071L11.4765 12.8907C10.4957 13.5892 9.29583 14 8 14C4.68629 14 2 11.3137 2 8Z" fill="#9CA3AF"/>
            </svg>
            </button>
        </form>
    </div>
    <div class="dash__controls flex items-center justify-end ml-3 lg:ml-5">
        <div class="notification__wrapper mr-3  lg:mr-5">
            <a href="#" class="inline-flex items-center justify-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </a>
        </div>
        <div class="profile__wrapper relative">
            <a href="#" class="inline-flex items-center justify-center"><img src="{{ @asset('user.png') }}" alt="profile"></a>
            {{-- <a href="#" class="inline-flex items-center justify-center"><img src="{{ @asset('img/profile.png') }}" alt="profile"></a> --}}
        </div>
        <div class="menu__button inline-flex items-center justify-center lg:hidden  ml-3">
            <a href="#" class="inline-flex items-center justify-center flex-col">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>
