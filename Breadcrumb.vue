<template>
  <nav class="rounded-md w-full">
	<ol class="list-reset flex">
	  <li><a href="#" class="text-blue-600 hover:text-blue-700">Home</a></li>
	  <span v-for="(list, index) in lists" :key="index">
		<li><span class="text-gray-500 mx-2">/</span></li>
		<li><a href="#" class="text-blue-600 hover:text-blue-700">Library</a></li>
	  </span>
	  <li><span class="text-gray-500 mx-2">/</span></li>
	  <li class="text-gray-500">Data</li>
	</ol>
  </nav>
</template>
<script>

export default {
  props: {
	  list: {
		type: Object,
		required:true
	  },
  },

  emits: ["update:modelValue"],

  methods: {
    focus() {
      this.$refs.input.focus();
    },
	change(){
	}
  },
  computed: {
	labelc(){
	  var newLabel = this.label.replace(/_/g, ' ');
	  return newLabel.replace(
		/\w\S*/g,
		function(txt) {
		  return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
		}
	  );
	}
  }
};
</script>

