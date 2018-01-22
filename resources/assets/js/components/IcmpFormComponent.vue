<template>
    <div class="container">
        <div id="entrada">
            <md-field>
                <label for="peso">PESO(kg)</label>
                <md-input type="number" id="peso" name="peso" v-model="selectedWeight"/>
            </md-field>

            <md-field>
                <label for="altura">ALTURA(m)</label>
                <md-input type="number" id="altura" name="altura" v-model="selectedHeight"/>
            </md-field>
        </div>
        <button class="btn btn-primary" @click="ICMP">calcular</button>

        <md-input id="resultRm" type="number" :value="result"></md-input>


    </div>

</template>

<script>


    export default {
        name: 'AutocompleteStatic',
        data() {
            return {
                selectedWeight: null,
                selectedHeight: null,
                result: null,


            }
        },


        methods: {
            ICMP() {
                this.result = this.selectedweigth / (this.selectedHeight * this.selectedHeight);


            }
        }
    }
</script>
<style>
    body {
        background-image: url("../../images/new-barbell-wallpaper.jpg");
        background-size: cover;
    }

    #entrada {
        background-color: white;
        max-width: 200px;

    }


</style>
