<template lang="html">
  <div>
    <toolbar></toolbar>
  <router-view></router-view>
  </div>
</template>

<script>
import toolbar from './Toolbar'
import login from './Login'

export default {
  components:{toolbar,login}
}
</script>

<style lang="css">
</style>
