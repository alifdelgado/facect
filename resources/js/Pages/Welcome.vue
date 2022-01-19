<template>
    <div class="h-screen bg-gray-200">
        <Nav />
        <div class="flex flex-1 overflow-auto">
            <Sidebar />
            <NewsFeed />
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import Nav from '../Shared/Nav';
    import Sidebar from '../Shared/Sidebar';
    import NewsFeed from './News/NewsFeed';

    export default defineComponent({
        components: {
            Head,
            Link,
            Nav,
            Sidebar,
            NewsFeed
        }
    });
</script>
