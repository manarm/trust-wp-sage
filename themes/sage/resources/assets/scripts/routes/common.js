import PersonDisplay from '../persondisplay';
import AOS from 'aos';

export default {
  init() {
    /* eslint-disable no-unused-vars */
    const personDisplay = new PersonDisplay();
    /* eslint-enable no-unused-vars */
    AOS.init();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
