<template>
    <div class="container">
        <div id="entrada">
            <md-field>
                <label for="peso">PESO(kg)</label>
                <md-input id="peso" name="peso" v-model="selectedWeight" @keyup.enter="ICMP"/>
            </md-field>

            <md-field>
                <label for="altura">ALTURA(m)</label>
                <md-input id="altura" name="altura" v-model="selectedHeight" @keyup.enter="ICMP"/>
            </md-field>
        </div>
        <button class="btn btn-primary" @click="ICMP">calcular</button>


        <md-input id="resultRm" :value="result"/>
        <md-input id="meta" name="meta" :value="result2" placeholder="metabolismo basal(hombre)"/>
        <md-input id="metam" name="metam" :value="result3" placeholder="metabolismo basal(mujeres)"/>
        <!-- METABOLISMO BASAL
    Mujeres: 7,4 x peso en kilogramos + 428 x altura en metros + 572
    Hombres: 16,6 x peso en kilogramos + 77 x altura en metros + 572
-->


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
                result2: null,
                result3: null,


            }
        },

        methods: {
            ICMP() {
                this.result = Math.floor(this.selectedWeight / (this.selectedHeight * this.selectedHeight));
                this.result2 = 16.6 * this.selectedWeight + 77 * this.selectedHeight + 572;
                /*HOMBRES*/
                this.result3 = 7.4 * this.selectedWeight + 428 * this.selectedHeight + 572;
                /*HOMBRES*/
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
