<template>
    <div class="container mx-auto max-w-lg">
        <div v-show="show==true" class="flex flex-col bg-white m-10 p-4 shadow-lg rounded-lg">
            <div class="relative">
                <div class="absolute right-0" @click="show=false"><i class="text-red-400 fa fa-times"></i></div>
                <div class="border-b-2 pb-2">Example Component</div>

                <div class="pt-2 text-xs">
                    I'm an example component.
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                show : true
            }
        }
    }
</script>
