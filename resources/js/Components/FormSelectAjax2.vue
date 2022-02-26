<template>
	<!-- Child Component -->
	<div :class="colspan? 'col-span-' + colspan + ' sm:col-span-6'  :  'col-span-6 sm:col-span-6'">
	  <label v-if="label" class="block text-sm font-medium text-gray-700">{{ labelc }}</label>
	  <multiselect 
		v-model="selectedText"
		:placeholder="'Search ' + label? labelc : name" 
		:class="message ? 'form-input block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red sm:text-sm sm:leading-5' : 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' "
		:options="options" 
		:label="searchable_column" 
		open-direction="top"
		track-by="id"
		@search-change="onSearchChange"
		@select="onSelected"
		@remove="onRemoved"
		ref="select"
		/>
	  <div v-show="message">
		  <p class="text-sm text-red-600">
			  {{ message }}
		  </p>
	  </div>
	</div>
</template>
<style type="text/css" media="screen">
.multiselect__tags{
  width: 100% !important;
}
</style>
<script>
import Multiselect from 'vue-multiselect';
import {throttle} from "lodash";
import 'vue-multiselect/dist/vue-multiselect.css'
import { defineComponent, ref } from 'vue'

export default defineComponent({
    components: {
		Multiselect
    },
  props: {
	 options: {
      type: Array,
	  default: () => [],
	  required: true
    },
    route: {
      type: String,
      required: true
    },
    index: {
      type: Number,
      required: false
    },
	label_option :{
      type: String,
      required: true
	},
    name: {
      type: String,
      required: true
	},
    searchable_column: {
      type: String,
      required: true
	},
	label : String ,
	colspan : String ,
	message : String ,
	value : String ,
  },
  data() {
    return {
      selectedText: this.value,
    }
  },
  methods: {
    onSearchChange: throttle(function (term) {
      this.$inertia.get( this.route, {term}, {
        preserveState: true,
        preserveScroll: true,
        replace: true
      })
    }, 600),
    onSelected(opt) {
      this.selectedText = opt[this.name]
	  this.$emit('updateForm', {
		value : opt.id,
		name : this.name,
		index : this.index? this.index: 0,
		label: opt[this.name],
	  })
    },
    onRemoved(opt) {
	  this.$emit('updateForm', {
		value : '',
		name : this.name,
		index : this.index? this.index: 0,
		label: ''
	  })
    },
	focus(){
	  this.$refs.select.$el.focus()
	},
	emptyValue(){
	  this.selectedText = undefined
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
		} else {
			return this.name
		}
	}
  },
})
</script>
