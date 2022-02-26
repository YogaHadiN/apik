<template>
  <div class="col-span-6 sm:col-span-6">
	<label 
	  v-if="label" 
	  :class="message ? 'block text-sm font-medium text-red-700' : 'block text-sm font-medium text-gray-700' "
	>{{ labelc }}
	</label>
	  <select 
		:class="message ? 'form-input block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red sm:text-sm sm:leading-5' : 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' "
		@change="$emit('update:modelValue', $event.target.value)"
		aria-placeholder="Silakan pilih"
		ref="input"
	  >
		<option value="" disabled :selected="modelValue == ''">Pilih </option>
		<option v-for="(option, key) in options" :key="key" v-text="option" :value="key" :selected="key == modelValue"></option>
	  </select>
	  <div v-show="message">
        <p class="text-sm text-red-600">
            {{ message }}
        </p>
    </div>
	</div>

</template>
<script>
export default {
  props: [
	"modelValue", 
	'label', 
	'message', 
	'options'
  ],

  emits: ["update:modelValue"],

  methods: {
    focus() {
      this.$refs.input.focus();
    },
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

