<template>
    <Head title="Dashboard" />
    <Content>
        <template #headerLeft>
          <breadcrumb :lists="breadcrumb"/>
        </template>
        <form-select-async 
          name="generik"
          route="/dashboard"
          :options="generiks"
          @updateForm="updateFormGenerik"
          ref="generik"
          />

    </Content>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/AppLayout.vue'
import Content from '@/Layouts/Content.vue'
import FormSelectAsync from '@/Components/FormSelectAjax2.vue'
import Breadcrumb from '@/Components/Breadcrumb.vue'
import { Head } from '@inertiajs/inertia-vue3';
import Multiselect from 'vue-multiselect';
import 'vue-multiselect/dist/vue-multiselect.css'

export default {
  data(){
    return{
      breadcrumb : [],
    }
  },
  layout: BreezeAuthenticatedLayout,
    components: {
        Content,
      Breadcrumb,
        FormSelectAsync,
		Multiselect,
        Head,
    },
  props: {
    generiks: {
      type: Array,
      default: () => []
    },
  },
  data() {
    return {
      selectedMechanic: undefined,
      form: this.$inertia.form({
        generik_id: '',
        // other fields
      })
    }
  },
  methods: {
    onSearchMechanicsChange(term) {
	  this.$inertia.get('/dashboard', {term}, {
        preserveState: true,
        preserveScroll: true,
        replace: true
      })
    },
    onSelectedMechanic(generik) {
      this.form.generik_id = generik.id;
    },
  }
}
</script>
