<template>
	<div :class="colspan? 'col-span-' + colspan + ' sm:col-span-6'  :  'col-span-6 sm:col-span-6'">
	  <label 
	  v-if="label" 
	  :class="message ? 'block text-sm font-medium text-red-700' : 'block text-sm font-medium text-gray-700' "
	>{{ labelc }}
	</label>
	  <input 
		:value="modelValue"
		:type="type == 'password'? 'password' : 'text'"
		:id="id"
		:placeholder="placeholder"
		ref="input"
		:name="name"
		:class="message ? 'form-input block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red sm:text-sm sm:leading-5' : 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' "
		@input="$emit('update:modelValue', $event.target.value)"
		@change="change"
	  />
	  <div v-show="message">
		  <p class="text-sm text-red-600" v-html="message">
		  </p>
	  </div>
	</div>
</template>
<script>

export default {
  props: [ 
	"modelValue", 
	'label' ,
	'colspan' ,
	'id' ,
	'name' ,
	'message' ,
	'placeholder' ,
	'type',
  ],

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

