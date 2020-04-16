<template>
  <card class="text-center">
    <h3 class="mb-4">
      {{ $t('title_personal') }}
    </h3>
    <h1>{{ info }}</h1>
  </card>
</template>

<script>
import axios from 'axios'

export default {
  
  data () {
    return {
      info: null
    }
  },
  mounted () {
    axios
      .get('/api/personal')
      .then(response => (this.info = response.data.personal))
  }

/*
  data: () => ({
    wave: 'Personal',
    origin: resp.data
  }),

  async function getData() {
    
    await axios.get('/data/personal').then(resp => {
     
      console.log(resp);
      //data.origin = resp.data;
      //return resp.data;

    });
  }
*/
}
</script>
