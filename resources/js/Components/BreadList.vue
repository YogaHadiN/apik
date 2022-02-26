<template>
	  <li><span class="text-gray-500 mx-2">/</span></li>
	  <li v-if="!last_item"><Link :href="route" class="text-blue-600 hover:text-blue-700">{{ label }}</Link></li>
	  <li v-else class="text-gray-500">{{ label }}</li>
</template>
<script>

import { Link } from '@inertiajs/inertia-vue3';
export default {
  components:{
	Link,
  },
  props: {
	route:String,
	label:String,
	last_item: Boolean
  },
};
</script>

