<form method="POST" action="{{ route('logout') }}" class="inline">
    @csrf
    <button type="submit" {{ $attributes->merge(['class' => 'group rounded-[4px] hover:bg-orange-700 transition-all duration-300 bg-[#EA580C] flex items-center gap-[12px]']) }}>
        <svg class="h-[25px] w-[25px] group-hover:fill-gray-50 transition-all duration-300 fill-[#ffffff]" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
            <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z"/>
        </svg>
        <div class="text-[16px] group-hover:text-gray-50 transition-all duration-300 font-medium text-[#ffffff]">
            {{ $slot->isEmpty() ? 'Log Out' : $slot }}
        </div>
    </button>
</form>