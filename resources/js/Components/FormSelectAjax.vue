<template>

  <div :class="colspan? 'col-span-' + colspan + ' sm:col-span-6'  :  'col-span-6 sm:col-span-6'">
	<label v-if="label" class="block text-sm font-medium text-gray-700">{{ labelc }}</label>
	<div>
	  <br>
	  <Multiselect
		v-bind = "example6"
	   :options="store"
	   @search-change="getData"
		@input="$emit('update:modelValue', $event)"
		ref    = "input"
		:class="message ? 'form-input block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red sm:text-sm sm:leading-5' : 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' "
	  />
	</div>
	<div v-show="message">
	  <p class="text-sm text-red-600">
		  {{ message }}
	  </p>
	</div>
  </div>
</template>
<script charset="utf-8">
  // @ts-ignore
  import Multiselect from '@vueform/multiselect'
  import { Head } from '@inertiajs/inertia-vue3';
  import axios from 'axios'
  import "@vueform/multiselect/themes/default.css"

  export default {
	props: { 
	  modelValue: String,
	  label: String,
	  selectedText: String,
	  colspan: String,
	  baseUrl: {
		type: String,
		required: true
	  },
	  message: String 
	},
	components: {
	  Multiselect,
	  Head
	},
	emits: ["update:modelValue"],
	methods : {
	   async getData(query){
		   if (query.length > 2) {
				let data = await axios.post( this.baseUrl + query);
				this.store = data.data;
		   }
        },
	},
	data(){
	  return {
		example6: {
		  filterResults: false,
		  clearOnSearch: true,
		  closeOnSelect: true,
		  clearOnSelect: true,
		  resolveOnLoad: false,
		  delay: 0,
		  searchable: true,
		},
		isLoading: false,
		store: [{
		  label : this.selectedText,
		  value : this.modelValue,
		}],
		queryData: null,  
	  }
	},
	computed: {
	  labelc(){
		  if (this.label) {
			var newLabel = this.label.replace(/_/g, ' ');
			return newLabel.replace(
			  /\w\S*/g,
			  function(txt) {
				return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
			  }
			);
		  }
	  },
	}
  }
</script>
