<template>
	<form-input
	  label    = "nomor_rak"
	  :colspan = "1"
	  :message = "form.errors.nomor_rak"
	  v-model  = "form.nomor_rak"
	/>
	<form-currency
	  label    = "harga_beli"
	  :message = "form.errors.harga_beli"
	  v-model  = "form.harga_beli"
	  :options = "{currency: 'IDR'}"
	/>
	<form-currency
	  label    = "harga_jual"
	  :message = "form.errors.harga_jual"
	  v-model  = "form.harga_jual"
	  :options = "{currency: 'IDR'}"
	/>
	<form-date
	  label    = "exp_date"
	  :message = "form.errors.exp_date"
	  v-model  = "form.exp_date"
	/>
	<form-input
	  label    = "stok_minimal"
	  :message = "form.errors.stok_minimal"
	  v-model  = "form.stok_minimal"
	/>
	<form-input
	  label    = "stok"
	  :message = "form.errors.stok"
	  v-model  = "form.stok"
	/>
</template>

<script>
	export default{
	  data(){
		return {

		}
	  },
		components: {

	   },
		props: {

	   },
		methods: {

	   },
	}
</script>
