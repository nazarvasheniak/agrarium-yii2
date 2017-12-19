// Modal
var Modal = function() {
    var self = this;

    this.overlay = document.querySelector('.overlay');
    this.container = document.querySelector('.modal_container');
    this.main = document.querySelector('main');

    this.modals = {
        'registration': 'registration_main',
        'authorization': 'authorization_main',
    }

    this.getModalByAction = function(action) {

        if (!self.modals[action]) {
            return false
        }

        return self.modals[action]
    }

    this.getModal = function(action) {
        this.name = self.getModalByAction(action)

        if (!this.name) {
            return false
        }

        this.modal = document.querySelector('.modal_window[data-modal="' + this.name + '"]')

        return this.modal
    }

    this.open = function(data) {
        this.target = self.getModal(data.action);

        this.target.classList.add('open');
        self.container.classList.add('open');
        self.overlay.classList.add('open');
        self.main.classList.add('modal-open');
    }

    this.close = function(target) {
        this.target = self.getModal(target);

        this.target.classList.remove('open');
        self.container.classList.remove('open');
        self.overlay.classList.remove('open');
        self.main.classList.remove('modal-open');
    }
}

var headerbuttons = document.querySelectorAll('header button');

Object.keys(headerbuttons).map(function(key, index) {

    // Click event
    headerbuttons[key].onclick = function(event) {

        // open modal
        var self = this;
        var modal = new Modal();
        var data = {
            'action': self.dataset.action
        }

        modal.open(data);
        modal.getModal(data.action).querySelector('.modal_close').onclick = function(event) {
            console.log(modal);
            event.stopPropagation();
            modal.close(data.action);
        }
    }
})