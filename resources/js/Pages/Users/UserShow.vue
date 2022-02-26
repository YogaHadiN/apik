<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Applicant Information
      </h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">
        Personal details and application.
      </p>
    </div>
	<div class="grid md:grid-cols-4 md:gap-4">
	  <div class="bg-indigo-300 md:col-span-1 bg-gray-400 sm:col-span-4 p-4">
		<div v-if="user.photo" class="mt-4">
		  <h2>Photo</h2>
		  <img :src="'/users/' + user.id + '/get/photo'" class="object-cover w-full  rounded-lg">
		</div>
		<div v-if="user.ktp_image" class="mt-4">
		  <h2>KTP</h2>
		  <img :src="'/users/' + user.id + '/get/ktp_image'" class="mt-4 object-cover w-full  rounded-lg">
		</div>
		<div v-if="user.str_image" class="mt-4">
		  <h2>STR</h2>
		  <img :src="'/users/' + user.id + '/get/str_image'" class="mt-4 object-cover w-full  rounded-lg">
		</div>
		<div v-if="user.sip_image" class="mt-4">
		  <h2>SIP</h2>
		  <img :src="'/users/' + user.id + '/get/sip_image'" class="mt-4 object-cover w-full  rounded-lg">
		</div>
		<div v-if="user.kartu_keluarga_image" class="mt-4">
		  <h2>Kartu Keluarga</h2>
		  <img :src="'/users/' + user.id + '/get/kartu_keluarga_image'" class="mt-4 object-cover w-full  rounded-lg">
		</div>
		<div v-if="user.npwp_image" class="mt-4">
		  <h2>Npwp</h2>
		  <img :src="'/users/' + user.id + '/get/npwp_image'" class="mt-4 object-cover w-full  rounded-lg">
		</div>
	  </div>
	  <div class="md:col-span-3 sm:col-span-4">
		<div class="border-t border-gray-200">
		  <dl>
			<row-show label="Nama" :nilai="user.name" :even="true"/>
			<row-show label="Email" :nilai="user.email"/>
			<row-show label="Role" :nilai="user.role.role" :even="true" />
			<row-show label="Active" :nilai="user.active === 1 ? 'aktif': 'tidak aktif'" :even="false" />
			<row-show label="Titel" :nilai="user.titel.titel" :even="false" />
			<row-show label="Alamat Domisili" :nilai="user.alamat_domisili" :even="true"/>
			<row-show label="Alamat KTP" :nilai="user.alamat_ktp" />
			<row-show label="No Telp" :nilai="user.no_telp"  :even="true"/>
			<row-show label="No KTP" :nilai="user.no_ktp" :even="true"/>
			<row-show label="No STR" :nilai="user.no_str" />
			<row-show label="Nomor Handphone" :nilai="user.no_hp" :even="true" />
			<row-show label="Universitas Asal" :nilai="user.universitas_asal" :even="false" />
			<row-show label="Tanggal Lulus" :nilai="user.tanggal_lulus" :even="true" />
			<row-show label="Tanggal Lahir" :nilai="user.tanggal_lahir" :even="false" />
			<row-show label="Tanggal mulai" :nilai="user.tanggal_mulai" :even="true" />
			<row-show label="Status Pernikahan" :nilai="user.menikah? 'Sudah menikah' : 'Belum menikah'" :even="false" />
			<row-show label="NPWP" :nilai="user.npwp" :even="true" />
			<row-show label="Jumlah Anak" :nilai="user.jumlah_anak" :even="false" />
			<row-show label="Jenis Kelamin" :nilai="user.jenis_kelamin === 1 ? 'Laki-laki': 'Perempuan'" :even="true" />
			<row-show label="Nomor Rekening" :nilai="user.nomor_rekening" :even="false" />
			<row-show label="Bank" :nilai="user.bank" :even="true" />
			<row-show label="Gaji Tetap" :nilai="user.gaji_tetap" :even="false" />
			<div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
			  <dt class="text-sm font-medium text-gray-500">
				Attachments
			  </dt>
			  <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
				<ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
				  <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
					<div class="w-0 flex-1 flex items-center">
					  <PaperClipIcon class="flex-shrink-0 h-5 w-5 text-gray-400" aria-hidden="true" />
					  <span class="ml-2 flex-1 w-0 truncate">
						resume_back_end_developer.pdf
					  </span>
					</div>
					<div class="ml-4 flex-shrink-0">
					  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
						Download
					  </a>
					</div>
				  </li>
				  <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
					<div class="w-0 flex-1 flex items-center">
					  <PaperClipIcon class="flex-shrink-0 h-5 w-5 text-gray-400" aria-hidden="true" />
					  <span class="ml-2 flex-1 w-0 truncate">
						coverletter_back_end_developer.pdf
					  </span>
					</div>
					<div class="ml-4 flex-shrink-0">
					  <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
						Download
					  </a>
					</div>
				  </li>
				</ul>
			  </dd>
			</div>
		  </dl>
		</div>
	  </div>
	</div>
  </div>
</template>

<script>
import { PaperClipIcon } from '@heroicons/vue/solid'
import RowShow from './RowShow.vue'

export default {
    props: ['user'],
    components: {
      PaperClipIcon,
      RowShow,
    },
    mounted() {
      console.log(this.user);
    }
}
</script>
