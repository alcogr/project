<template>
    <div class="container mx-auto">
        <div class="row justify-content-center">
            <div class="flex flex-col bg-white m-10 p-4 shadow-lg rounded-lg">
                <div class="card card-default">
                    <div class="border-b-2 pb-2">Example Component</div>

                    <div class="pt-2">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
