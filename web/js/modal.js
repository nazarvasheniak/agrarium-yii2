// Modal
var Modal = function(data) {
    var self = this;

    console.log(data);

    this.overlay = $('div.overlay');
    this.container = $('div.modal_container');

    this.showOverlay = function() {
        self.overlay.fadeIn()
    }

    this.hideOverlay = function() {
        self.overlay.fadeOut()
    }
}