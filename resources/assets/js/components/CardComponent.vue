<template>
    <div>
        <md-card>
            <md-card-media-cover>
                <md-card-media md-ratio="16:9">
                    <img :src="img" alt="Skyscraper">
                </md-card-media>

                <md-card-area>
                    <md-card-header>
                        <span class="md-title">{{title}}</span>
                        <span class="md-subhead">{{description}}</span>
                    </md-card-header>

                    <md-card-actions>
                        <md-button>Neither this</md-button>
                        <md-button>Or this</md-button>
                    </md-card-actions>
                </md-card-area>
            </md-card-media-cover>
        </md-card>


    </div>
</template>

<style lang="scss" scoped>
    .md-card {
        width: 320px;
        margin: 4px;
        display: inline-block;
        vertical-align: top;
    }
</style>

<script>
    export default {
        props: ['img', 'title', 'description'],
        name: 'MediaCover'
    }
</script>
