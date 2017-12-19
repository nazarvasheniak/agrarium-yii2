// Modal

var headerbuttons = document.querySelectorAll('header button');

var Modal = function() {
    var self = this;

    this.props = {
        'overlay': document.querySelector('.overlay'),
        'container': document.querySelector('.modal_container'),
        'body': document.body,
        'main': document.querySelector('main')
    }

    this.flip = {
        'front': document.querySelector('.flip_wrapper .front'),
        'back': document.querySelector('.flip_wrapper .back')
    }

    this.modals = {
        'registration': 'registration_main',
        'authorization': 'authorization_main',
    }

    this.getModalName = function(action) {

        if (!self.modals[action]) {
            return false
        }

        return self.modals[action]
    }

    this.getModal = function(action) {
        if (!action) {
            return false
        }

        this.name = self.getModalName(action)
        this.modal = document.querySelector('.modal_window[data-modal="' + this.name + '"]')

        return this.modal
    }

    this.show = function(element) {
        if (!element) {
            return false
        }

        this.element = element;
        this.element.classList.add('open');

        return true
    }

    this.hide = function(element) {
        if (!element) {
            return false
        }

        this.element = element;
        this.element.classList.remove('open');

        return true;
    }

    this.open = function(modal) {
        if (!modal) {
            return false
        }

        this.target = self.getModal(modal);

        Object.keys(self.props).map(function(key, index) {
            if (key == 'main' || key == 'body') {
                self.props[key].classList.add('modal-open')
            } else {
                self.show(self.props[key])
            }
        })

        self.show(this.target)

        return true
    }

    this.close = function(modal) {
        if (!modal) {
            return false
        }

        this.target = self.getModal(modal);

        Object.keys(self.props).map(function(key, index) {
            if (key == 'main' || key == 'body') {
                self.props[key].classList.remove('modal-open')
            } else {
                self.hide(self.props[key])
            }
        })

        self.hide(this.target)

        return true
    }
}

Object.keys(headerbuttons).map(function(key, index) {

    // Click event
    headerbuttons[key].onclick = function(event) {

        // open modal
        var self = this;
        var modal = new Modal();
        var action = self.dataset.action

        modal.open(action);
        modal.getModal(action).querySelector('.modal_close').onclick = function(event) {
            event.stopPropagation();
            modal.close(action);
        }
    }
})