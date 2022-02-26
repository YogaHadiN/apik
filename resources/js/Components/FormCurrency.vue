<template>
  <div :class="colspan? 'col-span-' + colspan + ' sm:col-span-6'  :  'col-span-6 sm:col-span-6'">
	  <label v-if="label" class="block text-sm font-medium text-gray-700">{{ labelc }}</label>
		<input 
		  ref="inputRef" 
		:class="message ? 'form-input block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red sm:text-sm sm:leading-5' : 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' "
		  type="text" 
		/>
	  <div v-show="message">
		  <p class="text-sm text-red-600">
			  {{ message }}
		  </p>
	  </div>
	</div>
</template>
<script>
import { useCurrencyInput } from 'vue-currency-input'
export default {
  name: 'CurrencyInput',
  props: {
    modelValue: Number, // Vue 2: value
    options: Object,
	label: String,
	colspan: String,
	message : String,
  },
  setup(props) {
    const { inputRef } = useCurrencyInput(props.options)
    return { inputRef }
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
}
</script>
