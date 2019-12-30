<template>
<div class="box">
        <counter></counter>
</div>
</template>

<script>
    import counter from './counter';
    export default {
        mounted() {
            console.log('Component mounted.!')
        },
        components:{
            counter
        }
    }
</script>

<style>
    .box{
        background: #e3e3e3;
        padding: 18px;
        border: 1px solid #c5c5c5;
    }
</style>
