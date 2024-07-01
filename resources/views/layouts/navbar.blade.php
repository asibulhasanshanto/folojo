<div  id="navbar" class="nav flex items-center justify-center z-10">
    <div class=" w-[90%] relative bg-[#faf3e6] h-[90px] rounded-bl-xl rounded-br-xl flex items-center justify-between px-[20px]">
        <!-- menu buttons -->
        <div class="menu-buttons flex items-center gap-3">
            <a href="/" class="menu-button ">Products</a>
            <a href="{{url('/about')}}" class="menu-button">About Us</a>

        </div>
        <!-- logo -->
        <div class="logo absolute right-0 xl:left-[45%]">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-[70px] w-auto">
        </div>

    </div>
</div>