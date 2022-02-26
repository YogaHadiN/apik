<template>
<nav class="float-left rounded-md">
  <ol class="flex list-reset">
	<li><Link href="/dashboard" class="text-blue-600 hover:text-blue-700">Home</Link></li>
	<BreadList v-for="(list, index) in lists" :key="index" :route="list.route" :label="list.label" :last_item="index == lists.length - 1" />
  </ol>
</nav>

</template>
<script>

import { Head, Link } from '@inertiajs/inertia-vue3';
import BreadList from './BreadList.vue'
export default {
  components:{
	Link,
    BreadList
  },
  props: {
	  lists: {
		type: Object,
		required:true
	  },
  },
};
</script>

