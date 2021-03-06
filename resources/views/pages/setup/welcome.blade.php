@extends( 'layout.base' )

@section( 'layout.base.body' )
<div id="nexopos-setup" class="h-full w-full bg-gray-300 overflow-auto py-10">
    <div class="container mx-auto flex-auto items-center justify-center flex">
        <div id="sign-in-box" class="w-full md:w-2/5 flex flex-col">
            <div class="w-full flex justify-center items-center py-4">
                <h1 class="text-6xl font-bold block">NexoPOS</h1>
            </div>
            <router-view></router-view>
        </div>
    </div>    
</div>
@endsection