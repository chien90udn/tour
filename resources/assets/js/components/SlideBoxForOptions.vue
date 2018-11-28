<template>
    <div class="slideBox">
        <div class="sortable">
            <div class="slideBox__item" v-for="(img, index) in images" :key="index">
                <img :src="img.url">
                <input type="hidden" :name="name + '[' + index  +'][url]'" :value="img.url">
                <input type="hidden" :name="name + '[' + index  +'][title]'" :value="img.title">
                <input type="hidden" :name="name + '[' + index  +'][description]'" :value="img.description">
                <input type="hidden" :name="name + '[' + index  +'][link]'" :value="img.link">
                <div class="action">
                    <button type="button" class="btn btn-sm btn-default" @click="openEditImageModal(index);">
                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger" @click="removeImage(index);">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="slideBox__item slideBox__add_new_image" @click.prevent="openBrowser();"></div>
        <div class="clearfix"></div>

        <div :id="id" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <form action="#" @submit.prevent="handleSubmit">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Image</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Url</label>
                                <div class="input-group input-browser">
                                    <input type="text" :id="imageId" class="form-control" placeholder="http://example.com/name-of-image.jpg">
                                    <span class="input-group-btn">
                                    <a href="#" class="btn btn-primary"><i class="fa fa-folder" aria-hidden="true"></i></a>
                                </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Link</label>
                                <input type="text" v-model="imageLink" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input type="text" v-model="imageTitle" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <textarea type="text" v-model="imageDescription" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Ok</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['id', 'name', 'data'],

        data() {
            return {
                images: [],
                imageId: this.randomString(),
                imageTitle: '',
                imageLink: '',
                imageDescription: '',
                imageIndex: null
            }
        },

        mounted() {
            this.images = this.data;

            // $('.sortable').sortable({
            //     placeholder: "ui-state-highlight",
            //     opacity: '0.75'
            // }).disableSelection();

        },

        methods: {
            handleSubmit() {
                $('#' + this.id).modal('hide');

                let imageData = {
                    url: document.getElementById(this.imageId).value,
                    title: this.imageTitle,
                    link: this.imageLink,
                    description: this.imageDescription
                };

                if (this.imageIndex === null) {
                    this.images.push(imageData);
                } else {
                    this.$set(this.images, this.imageIndex, imageData);
                    this.imageIndex = null;
                }
            },

            resetData() {
                this.imageTitle = '';
                this.imageLink = '';
                this.imageDescription = null;
                document.getElementById(this.imageId).value = '';
            },

            openImageModal() {
                $('#' + this.id).modal('show');
            },

            openAddNewImageModal() {
                this.resetData();
                this.openImageModal();
            },

            openEditImageModal(index) {
                this.imageIndex = index;
                this.imageTitle = this.images[this.imageIndex].title;
                this.imageLink = this.images[this.imageIndex].link;
                this.imageDescription = this.images[this.imageIndex].description;
                document.getElementById(this.imageId).value = this.images[this.imageIndex].url;

                this.openImageModal();
            },

            removeImage(index) {
                this.images.splice(index, 1);
            },

            openBrowser() {
                window.moxman.browse({
                    oninsert: (args) => {
                        for (let file of args.files) {
                            let imageData = {
                                url: file.url,
                                title: '',
                                link: '',
                                description: ''
                            };
                            this.images.push(imageData);
                        }
                    }
                });
            }
        }
    }
</script>