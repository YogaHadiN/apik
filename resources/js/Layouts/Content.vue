<template>

    <jet-banner />
    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="px-4 pt-6 pb-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                <slot name="headerLeft"></slot>
                <div class="float-right">
                    <slot name="headerRight"></slot>
                </div>
            </h2>
        </div>
    </header>
    <!-- Page Content -->
    <main>
        <div class="m-6">
            <div class="p-6 bg-white border-b border-gray-200 rounded-md">
                <slot></slot>
            </div>
        </div>
    </main>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetApplicationMark from '@/Jetstream/ApplicationMark.vue'
    import JetBanner from '@/Jetstream/Banner.vue'
    import PrimaryNavigation from '@/Jetstream/PrimaryNavigation.vue'
    import JetDropdown from '@/Jetstream/Dropdown.vue'
	import SideMenu from '@/Jetstream/SideMenu.vue'
    import JetDropdownLink from '@/Jetstream/DropdownLink.vue'
    import JetNavLink from '@/Jetstream/NavLink.vue'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import {CalendarIcon, ChatIcon, ClipboardListIcon, ClockIcon, HeartIcon, HomeIcon, SearchIcon} from '@heroicons/vue/outline';

    export default defineComponent({
        props: {
            title: String,
            errors: Object,
        },
        components: {
            PrimaryNavigation,
            Head,
			SideMenu,
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Link,
            CalendarIcon, ChatIcon, ClipboardListIcon, ClockIcon, HeartIcon, HomeIcon, SearchIcon
        },
        data() {
            return {
                showingNavigationDropdown: false,
            }
        },
        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },

            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    })
</script>
