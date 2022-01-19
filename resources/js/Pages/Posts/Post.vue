<template>
    <div class="w-2/3 mt-6 overflow-hidden bg-white rounded shadow">
        <div class="flex flex-col p-4">
            <div class="flex items-center">
                <div class="w-8"><i class="fas fa-user-circle fa-2x"></i></div>
                <div class="ml-6">
                    <div class="text-sm font-bold">New user</div>
                    <div class="text-sm text-gray-600">12 mins</div>
                </div>
            </div>
            <div class="mt-4">
                <p>not having fun at all</p>
            </div>
        </div>
        <div class="w-full">
            <img src="https://images.pexels.com/photos/2299028/pexels-photo-2299028.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Great coffee" class="w-full">
        </div>
        <div class="flex justify-between px-4 pt-2 text-sm text-gray-700">
            <div class="flex">
                <i class="far fa-thumbs-up"></i>
                <p class="pl-2">Jane Smith and 137 others</p>
            </div>
            <div>
                <p>123 comments</p>
            </div>
        </div>
        <div class="flex justify-between m-4 border-gray-400 border-1">
            <button type="button" class="flex items-center justify-center w-full py-2 text-sm text-gray-700 hover:bg-gray-200">
                <i class="far fa-thumbs-up"></i>
                <p class="pl-2">Like</p>
            </button>
            <button type="button" class="flex items-center justify-center w-full py-2 text-sm text-gray-700 hover:bg-gray-200">
                <i class="far fa-comment-dots"></i>
                <p class="pl-2">Comment</p>
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "Post"
}
</script>
