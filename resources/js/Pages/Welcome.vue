<template>
    <!-- <Head title="Welcome" /> -->
    <div class="h-screen bg-gray-200">
        <Nav />
        <div class="flex flex-1 overflow-auto">
            <Sidebar />
            <div class="w-2/3 overflow-x-hidden">
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import Nav from '../Shared/Nav';
    import Sidebar from '../Shared/Sidebar';

    export default defineComponent({
        components: {
            Head,
            Link,
            Nav,
            Sidebar
        },
    })
</script>
