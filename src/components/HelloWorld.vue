<template>
    <div id="app" data-app app-data="true" light>
<v-app>
  <v-row
    align="center"
    justify="space-around"
  >
    <v-btn depressed>
      Normal
    </v-btn>
    <v-btn
      depressed
      color="primary"
    >
      Primary
    </v-btn>
    <v-btn
      depressed
      color="error"
    >
      Error
    </v-btn>
    <v-btn
      depressed
      disabled
    >
      Disabledxx 
    </v-btn>
  </v-row>
</v-app>
 </div>
   
</template>

<script>
  export default {
    data () {
      return {
        dialog: true,
      }
    },
      computed: {},
      methods: {
        xx()
        {
          this.$router.push("/admin");
        }
      },
  }
</script>