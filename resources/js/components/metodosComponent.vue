<template>
    <div class="card-body">
        <form v-on:submit.prevent="calOp1(),calOp2(),calOp3(),calOp4(),sumaP()">
            <div class="card-title"><h3>Probabilidad conjunta</h3></div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 form-group">
                    <label for="pm1">P(M1):</label>    
                    <input type="text" class="form-control" v-model="pm1" name="pm1" id="pm1" maxlength="8">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 form-group">
                    <label for="pm2">P(M2):</label>    
                    <input type="text" class="form-control" v-model="pm2" name="pm2" id="pm2" maxlength="8">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 form-group">
                    <label for="pmo1m1">P(O1/M1):</label>    
                    <input type="text" class="form-control" v-model="pmo1m1" name="pmo1m1" id="pmo1m1" maxlength="8">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 form-group">
                    <label for="pmo2m1">P(O2/M1):</label>    
                    <input type="text" class="form-control" v-model="pmo2m1" name="pmo2m1" id="pmo2m1" maxlength="8">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 form-group">
                    <label for="pmo2m2">P(O2/M2):</label>    
                    <input type="text" class="form-control" v-model="pmo2m2" name="pmo2m2" id="pmo2m2" maxlength="8">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 form-group">
                    <label for="pmo1m2">P(O1/M2):</label>    
                    <input type="text" class="form-control" v-model="pmo1m2" name="pmo1m2" id="pmo1m2" maxlength="8">
                </div>
            </div>
            <div class="row pb-3">
                <div class="col">
                    <button type="submit" class="btn btn-secondary">Calcular resultados</button>                
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 form-group" v-if="this.res1!=0">
                    <label for="res1">P(M1,O1):</label>    
                    <input type="text" class="form-control" v-model="res1" name="res1" id="res1" readonly>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 form-group" v-if="this.res1!=0">
                    <label for="res2">P(M2,O1):</label>    
                    <input type="text" class="form-control" v-model="res2" name="res2" id="res2" readonly>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 form-group" v-if="this.res1!=0">
                    <label for="res3">P(M1,O2):</label>    
                    <input type="text" class="form-control" v-model="res3" name="res3" id="res3" readonly>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 form-group" v-if="this.res1!=0">
                    <label for="res4">P(M2,O2):</label>    
                    <input type="text" class="form-control" v-model="res4" name="res4" id="res4" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 form-group" v-if="this.res1!=0">
                    <label for="spc">Suma de probabilidad conjunta:</label>    
                    <input type="text" class="form-control" v-model="spc" name="spc" id="spc">
                </div>
            </div>
        </form>
        <form v-on:submit.prevent="calOpC1(),calOpC2(),calOpC3(),calOpC4()">
        <div class="form-group" v-if="this.spc!=0">
            <div class="card-title"><h3>Probabilidad condicional</h3></div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 form-group">
                    <label for="po1">P(O1):</label>    
                    <input type="text" class="form-control" v-model="po1" name="po1" id="po1" maxlength="8">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 form-group">
                    <label for="po2">P(O2):</label>    
                    <input type="text" class="form-control" v-model="po2" name="po2" id="po2" maxlength="8">
                </div>
            </div>
            <div class="row pb-3">
                <div class="col">
                    <button type="submit" class="btn btn-secondary">Calcular resultados</button>                
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 form-group" v-if="this.resC1!=0">
                    <label for="resC1">P(M1/O1):</label>    
                    <input type="text" class="form-control" v-model="resC1" name="resC1" id="resC1" readonly>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 form-group" v-if="this.resC1!=0">
                    <label for="resC2">P(M2/O1):</label>    
                    <input type="text" class="form-control" v-model="resC2" name="resC2" id="resC2" readonly>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 form-group" v-if="this.resC1!=0">
                    <label for="resC3">P(M1/O2):</label>    
                    <input type="text" class="form-control" v-model="resC3" name="resC3" id="resC3" readonly>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 form-group" v-if="this.resC1!=0">
                    <label for="resC4">P(M2/O2):</label>    
                    <input type="text" class="form-control" v-model="resC4" name="resC4" id="resC4" readonly>
                </div>
            </div>
        </div>
        </form>
    </div>
</template>

<script>
    import VeeValidate from 'vee-validate'
    import { Validator } from 'vee-validate'
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                pm1:'',
                pm2:'',
                pmo1m1:'',
                pmo2m1:'',
                pmo2m2:'',
                pmo1m2:'',
                res1:0,
                res2:0,
                res3:0,
                res4:0,
                spc:0,
                po1:'',
                po2:'',
                resC1:0,
                resC2:0,
                resC3:0,
                resC4:0,
                spcd:0,
            }
        },
        methods:{
            calOp1:function(){
                this.res1=parseFloat(this.pm1)*parseFloat(this.pmo1m1)
            },
            calOp2:function(){
                this.res2=parseFloat(this.pm2)*parseFloat(this.pmo1m2)
            },
            calOp3:function(){
                this.res3=parseFloat(this.pm1)*parseFloat(this.pmo2m1)
            },
            calOp4:function(){
                this.res4=parseFloat(this.pm2)*parseFloat(this.pmo2m2)
            },
            sumaP:function(){
                this.spc=parseFloat(this.res1)+parseFloat(this.res2)+parseFloat(this.res3)+parseFloat(this.res4)
            },
            calOpC1:function(){
                this.resC1=parseFloat(this.res1)/parseFloat(this.po1)
            },
            calOpC2:function(){
                this.resC2=parseFloat(this.res2)/parseFloat(this.po1)
            },
            calOpC3:function(){
                this.resC3=parseFloat(this.res3)/parseFloat(this.po2)
            },
            calOpC4:function(){
                this.resC4=parseFloat(this.res4)/parseFloat(this.po2)
            },
        },
        
    }
</script>
