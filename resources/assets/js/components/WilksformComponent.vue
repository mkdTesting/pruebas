<template>
    <div class="container">
        <div id="entrada">
            <md-field>
                <label for="repes">REPES</label>
                <md-input id="repes" name="first-name" v-model="selectedRepetitions"/>
            </md-field>

            <md-field>
                <label for="peso">PESO</label>
                <md-input id="peso" name="peso" v-model="selectedweigth"/>
            </md-field>
        </div>
        <button class="btn btn-primary" @click="RM">calcular</button>

        <md-input id="resultRm" type="text" :value="result"></md-input>

        <div class="container" id="salida">
            <div><a href="#" class="badge badge-ligth">porcentajes</a></div>
            <ul class="alt text-left">
                <li>95% <strong id="J">{{result2}}kg</strong></li>
                <li>90% <strong id="I">{{result3}}kg</strong></li>
                <li>85% <strong id="H">{{result4}}kg</strong></li>
                <li>80% <strong id="G">{{result5}}kg</strong></li>
                <li>75% <strong id="F">{{result6}}kg</strong></li>
                <li>70% <strong id="E">{{result7}}kg</strong></li>
                <li>65% <strong id="D">{{result8}}kg</strong></li>
                <li>60% <strong id="C">{{result9}}kg</strong></li>

            </ul>


        </div>


    </div>

</template>

<script>


    export default {
        name: 'AutocompleteStatic',
        data() {
            return {
                selectedRepetitions: null,
                selectedweigth: null,
                result: null,
                result2: null,
                result4: null,
                result5: null,
                result6: null,
                result7: null,
                result8: null,
                result9: null,

            }
        },


        methods: {
            RM() {
                this.result = this.selectedweigth * (1 + (0.033 * this.selectedRepetitions));
                this.result2 = (this.result * 0.95);
                this.result3 = (this.result * 0.90);
                this.result4 = (this.result * 0.85);
                this.result5 = (this.result * 0.80);
                this.result6 = (this.result * 0.75);
                this.result7 = (this.result * 0.70);
                this.result8 = (this.result * 0.65);
                this.result9 = (this.result * 0.60);

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

    #salida {

        background-color: white;
        max-width: 400px;
    }

    #resultRm {
        background-color: white;

    }


</style>
