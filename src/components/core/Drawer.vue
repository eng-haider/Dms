<template>
      <v-navigation-drawer permanent color="#272727" style="color:#fff"  id="core-navigation-drawer" app :right="$vuetify.rtl"  :dark="'rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.7)'">
        <v-list-item>
      <v-list-item-content>
        <v-list-item-title class="text-uppercase font-weight-regular">
          <v-row align="center" justify="center">
            <v-col align="center" justify="center" cols="12" md="6">
              <h4 style="color:#fff">Alkafeel CMS </h4>
            </v-col>
            <v-col class="text-center">
              <!-- <img width="31px" src="../../assets/project-management.svg" /> -->
            </v-col>

          </v-row>
        </v-list-item-title>
      </v-list-item-content>
    </v-list-item>
    {{changeLang()}}
    <v-divider class="mb-1" />

      <v-list-item two-line>


      <v-list-item-avatar>
        <img
          src="https://cdn1.vectorstock.com/i/1000x1000/51/05/male-profile-avatar-with-brown-hair-vector-12055105.jpg" />
      </v-list-item-avatar>
      <v-list-item-content>
        <v-list-item-title style="color:#fff">{{ $store.state.AdminInfo.name }}</v-list-item-title>
        <v-list-item-subtitle style="color:#fff">{{
         $store.state.AdminInfo.name
        }}</v-list-item-subtitle>
      </v-list-item-content>
    </v-list-item>
    <v-divider light style="color#fff" />


      <v-list
        dense
        nav
      
      >
        <v-list-item
          style="color:#fff !important"
          v-for="item in items"
          :key="item.title"
          link
          :to="item.to"
        >
          <v-list-item-icon >
            <v-icon style="color:#fff !important">{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
</template>

<script>
  export default {
    data () {
      return {
        items: [
          { title: 'Dashboard', icon: 'mdi-view-dashboard',to: "/admin" },
         
        ],
        right: null,
      }
    },
    methods: {
       changeLang() {


        this.items[0].title = this.$t("Drawer.statistics")

     

      },
    },
  }
</script>