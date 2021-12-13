<template>
    <div class="flex items-center h-12 px-4 bg-white border-b-2 border-gray-300 shadow-sm">
        <div class="w-1/3">
            <div class="flex">
                <Link :href="route('home')">
                    <img src="https://img.icons8.com/color/48/000000/facebook-circled--v5.png"/>
                </Link>
                <div class="relative ml-2">
                    <div class="absolute text-gray-600">
                        <i class="w-5 h-5 mt-4 ml-3 fas fa-search"></i>
                    </div>
                    <input type="text" name="" id="" class="w-56 h-8 pl-8 mt-2 text-sm bg-gray-200 border-0 rounded-full outline-none focus:outline-none" placeholder="Search facect">
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center w-1/3 gap-x-8">
            <Link :href="route('home')" class="items-center h-full p-2 border-b-2 border-white hover:border-blue-400"><i class="fas fa-home"></i></Link>
            <Link :href="route('home')" class="items-center h-full border-b-2 border-white hover:border-blue-400"><i class="w-8 h-8 fas fa-user-circle fa-2x"></i></Link>
            <Link :href="route('home')" class="items-center h-full p-2 border-b-2 border-white hover:border-blue-400"><i class="fas fa-comment-dots"></i></Link>
        </div>
        <div class="flex justify-end w-1/3">
            <div>
                <i class="fas fa-cog"></i>
            </div>
        </div>
    </div>
    <!-- <div v-if="canLogin" class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
        <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
            Dashboard
        </Link>

        <template v-else>
            <Link :href="route('login')" class="text-sm text-gray-700 underline">
                Log in
            </Link>

            <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                Register
            </Link>
        </template>
    </div> -->
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: { Link },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    }
}
</script>
