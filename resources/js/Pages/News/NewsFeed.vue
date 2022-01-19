<template>
    <div class="w-2/3 overflow-x-hidden">
        <div class="flex flex-col items-center py-4">
            <NewPost />
            <Post />
        </div>
    </div>
</template>

<script>
import Post from '../Posts/Post';
import NewPost from '../Posts/NewPost';
export default {
    name: "NewsFeed",
    components: {
        NewPost,
        Post
    },
    props: []
}
</script>
