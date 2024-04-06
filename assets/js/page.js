let moduleConfig = {
    template: '',
    page: 1,
    numberOfRows: 51,
    endpoints: {
        getCaptions: '',
        captionDetails: ''
    },
    contentHolderSelector:  ''
}

Page = {
    page: 0,
    numberOfRows: 0,
    query: '',
    alphabet: '',
    total: 0,
    init: function (config){
        moduleConfig = {
            ...moduleConfig,
            ...config
        };

        this.page = moduleConfig.page;
        this.numberOfRows = moduleConfig.numberOfRows;
    },

    getCaptions: function (){

    },
    searchCaptionsHandler: function (event){

    },
    clickedAlphabetHandler: function (character, currentElement) {

    },
    clickedPageHandler: function (type) {

    },
    managedPageHandler: function (){

    },
    renderCaption: function (){

    }

}