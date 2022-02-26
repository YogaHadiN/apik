<template>
  <div class="col-span-6 sm:col-span-6">
	<label class="block text-sm font-medium text-gray-700">
	  {{ labelc }} 
	</label>
	<div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
	  <div class="space-y-1 text-center">
		<img v-if="uploading"  src="/img/Spinner-1s-200px.gif" alt=""/>
		<img v-else-if="fileUrl" :src="fileUrl" alt=""/>
		<img v-else-if="value" :src="existing_url" alt=""/>
		<svg v-else class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
		  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
		</svg>
		<div class="flex text-sm text-gray-600">
		  <label class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
			<span>Upload a file</span>
			<input 
			  @change="fileUpload"
			  name="file-upload" 
			  type="file" 
			  class="sr-only"
			  ref="input"
			 />
		  </label>
		  <p class="pl-1">or drag and drop</p>
		</div>
		<p class="text-xs text-gray-500">
		  PNG, JPG, GIF up to 10MB
		</p>
	  </div>
	</div>
	<div v-show="message">
        <p class="text-sm text-red-600">
            {{ message }}
        </p>
    </div>
  </div>
</template>
<script>


import { defineComponent } from 'vue'

export default defineComponent({
  data(){
	return {
	  uploading : false,
	  fileUrl : null,
	}
  },
  props: {
	label : {
	  type: String
	} ,
	submitRoute:  String,
	value:        String,
	existing_url: String,
	name:         String,
	message:         String
  },
  emits: ["update:modelValue"],
  methods: {
	fileUpload(event){
	  const selectedFile = event.target.files[0];
	  this.fileUrl       = URL.createObjectURL(selectedFile);;
	  this.$emit('updateForm', {
		  'value' : event.target.files[0],
		  'name' : this.name
	  });
	},
  },
  mounted: () => {

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
});
</script>

