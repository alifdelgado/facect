<template>
    <div class="w-2/3 p-4 bg-white rounded shadow">
        <div class="flex items-center justify-between">
            <div>
                <div class="w-8"><i class="fas fa-user-circle fa-2x"></i></div>
            </div>
            <div class="flex-1 mx-4">
                <input type="text" name="body" class="w-full h-8 pl-4 text-sm bg-gray-200 border-0 outline-none focus:border-0 focus:outline-none" placeholder="Add a post">
            </div>
            <div>
                <button type="button" class="flex items-center justify-center w-10 h-10 bg-gray-200 rounded-full">
                    <i class="fas fa-image fa-xl"></i>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "NewPost",
}
</script>
