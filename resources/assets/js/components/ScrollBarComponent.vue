<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <md-content class="md-scrollbar">
                    <p>{{content}}</p>
                </md-content>
            </div>
            <div class="col-md-6">
                <img :src="img">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['content', 'img'],
        name: 'ScrollbarExample'
    }

</script>

<style lang="scss" scoped>
    .md-content {
        max-width: 400px;
        max-height: 200px;
        overflow: auto;
    }
</style>
