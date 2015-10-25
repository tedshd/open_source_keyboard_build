/**
 *
 * @authors Ted Shiu (tedshd@gmail.com)
 * @date    2015-10-25 15:14:03
 * @version $Id$
 */

var KEY_MAP = {
    '8': {
        '0': 'Back Space',
        '1': '',
        '2': ''
    },
    '9': {
        '0': 'Tab',
        '1': '',
        '2': ''
    },
    '13': {
        '0': 'Enter',
        '1': '',
        '2': ''
    },
    '16': {
        '0': '',
        '1': 'L Shift',
        '2': 'R Shift'
    },
    '17': {
        '0': '',
        '1': 'L Ctrl',
        '2': 'R Ctrl'
    },
    '18': {
        '0': '',
        '1': 'L Alt',
        '2': 'R Alt'
    },
    '19': {
        '0': 'Pause Break',
        '1': '',
        '2': ''
    },
    '20': {
        '0': 'Caps Lock',
        '1': '',
        '2': ''
    },
    '27': {
        '0': 'Esc',
        '1': '',
        '2': ''
    },
    '32': {
        '0': 'Spacebar',
        '1': '',
        '2': ''
    },
    '33': {
        '0': 'Page Up',
        '1': '',
        '2': ''
    },
    '34': {
        '0': 'Page Down',
        '1': '',
        '2': ''
    },
    '35': {
        '0': 'End',
        '1': '',
        '2': ''
    },
    '36': {
        '0': 'Home',
        '1': '',
        '2': ''
    },
    '37': {
        '0': '&#8592',
        '1': '',
        '2': ''
    },
    '38': {
        '0': '&#8593',
        '1': '',
        '2': ''
    },
    '39': {
        '0': '&#8594',
        '1': '',
        '2': ''
    },
    '40': {
        '0': '&#8595',
        '1': '',
        '2': ''
    },
    '44': {
        '0': 'Print Screen',
        '1': '',
        '2': ''
    },
    '45': {
        '0': 'Insert',
        '1': '',
        '2': ''
    },
    '46': {
        '0': 'Delete',
        '1': '',
        '2': ''
    },
    '48': {
        '0': '0',
        '1': '',
        '2': ''
    },
    '49': {
        '0': '1',
        '1': '',
        '2': ''
    },
    '50': {
        '0': '2',
        '1': '',
        '2': ''
    },
    '51': {
        '0': '3',
        '1': '',
        '2': ''
    },
    '52': {
        '0': '4',
        '1': '',
        '2': ''
    },
    '53': {
        '0': '5',
        '1': '',
        '2': ''
    },
    '54': {
        '0': '6',
        '1': '',
        '2': ''
    },
    '55': {
        '0': '7',
        '1': '',
        '2': ''
    },
    '56': {
        '0': '8',
        '1': '',
        '2': ''
    },
    '57': {
        '0': '9',
        '1': '',
        '2': ''
    },
    '65': {
        '0': 'A',
        '1': '',
        '2': ''
    },
    '66': {
        '0': 'B',
        '1': '',
        '2': ''
    },
    '67': {
        '0': 'C',
        '1': '',
        '2': ''
    },
    '68': {
        '0': 'D',
        '1': '',
        '2': ''
    },
    '69': {
        '0': 'E',
        '1': '',
        '2': ''
    },
    '70': {
        '0': 'F',
        '1': '',
        '2': ''
    },
    '71': {
        '0': 'G',
        '1': '',
        '2': ''
    },
    '72': {
        '0': 'H',
        '1': '',
        '2': ''
    },
    '73': {
        '0': 'I',
        '1': '',
        '2': ''
    },
    '74': {
        '0': 'J',
        '1': '',
        '2': ''
    },
    '75': {
        '0': 'K',
        '1': '',
        '2': ''
    },
    '76': {
        '0': 'L',
        '1': '',
        '2': ''
    },
    '77': {
        '0': 'M',
        '1': '',
        '2': ''
    },
    '78': {
        '0': 'N',
        '1': '',
        '2': ''
    },
    '79': {
        '0': 'O',
        '1': '',
        '2': ''
    },
    '80': {
        '0': 'P',
        '1': '',
        '2': ''
    },
    '81': {
        '0': 'Q',
        '1': '',
        '2': ''
    },
    '82': {
        '0': 'R',
        '1': '',
        '2': ''
    },
    '83': {
        '0': 'S',
        '1': '',
        '2': ''
    },
    '84': {
        '0': 'T',
        '1': '',
        '2': ''
    },
    '85': {
        '0': 'U',
        '1': '',
        '2': ''
    },
    '86': {
        '0': 'V',
        '1': '',
        '2': ''
    },
    '87': {
        '0': 'W',
        '1': '',
        '2': ''
    },
    '88': {
        '0': 'X',
        '1': '',
        '2': ''
    },
    '89': {
        '0': 'Y',
        '1': '',
        '2': ''
    },
    '90': {
        '0': 'Z',
        '1': '',
        '2': ''
    },
    '91': {
        '0': '',
        '1': 'L Win',
        '2': 'R Win'
    },
    '93': {
        '0': 'Menu',
        '1': '',
        '2': ''
    },
    '96': {
        '0': '0',
        '1': '',
        '2': ''
    },
    '97': {
        '0': '1',
        '1': '',
        '2': ''
    },
    '98': {
        '0': '2',
        '1': '',
        '2': ''
    },
    '99': {
        '0': '3',
        '1': '',
        '2': ''
    },
    '100': {
        '0': '4',
        '1': '',
        '2': ''
    },
    '101': {
        '0': '5',
        '1': '',
        '2': ''
    },
    '102': {
        '0': '6',
        '1': '',
        '2': ''
    },
    '103': {
        '0': '7',
        '1': '',
        '2': ''
    },
    '104': {
        '0': '8',
        '1': '',
        '2': ''
    },
    '105': {
        '0': '9',
        '1': '',
        '2': ''
    },
    '106': {
        '0': '*',
        '1': '',
        '2': ''
    },
    '107': {
        '0': '+',
        '1': '',
        '2': ''
    },
    '109': {
        '0': '-',
        '1': '',
        '2': ''
    },
    '110': {
        '0': '.',
        '1': '',
        '2': ''
    },
    '111': {
        '0': '/',
        '1': '',
        '2': ''
    },
    '112': {
        '0': 'F1',
        '1': '',
        '2': ''
    },
    '113': {
        '0': 'F2',
        '1': '',
        '2': ''
    },
    '114': {
        '0': 'F3',
        '1': '',
        '2': ''
    },
    '115': {
        '0': 'F4',
        '1': '',
        '2': ''
    },
    '116': {
        '0': 'F5',
        '1': '',
        '2': ''
    },
    '117': {
        '0': 'F6',
        '1': '',
        '2': ''
    },
    '118': {
        '0': 'F7',
        '1': '',
        '2': ''
    },
    '119': {
        '0': 'F8',
        '1': '',
        '2': ''
    },
    '120': {
        '0': 'F9',
        '1': '',
        '2': ''
    },
    '121': {
        '0': 'F10',
        '1': '',
        '2': ''
    },
    '122': {
        '0': 'F11',
        '1': '',
        '2': ''
    },
    '123': {
        '0': 'F12',
        '1': '',
        '2': ''
    },
    '144': {
        '0': 'Num Lock',
        '1': '',
        '2': ''
    },
    '145': {
        '0': 'Scroll Lock',
        '1': '',
        '2': ''
    },
    '186': {
        '0': ';',
        '1': '',
        '2': ''
    },
    '187': {
        '0': '=',
        '1': '',
        '2': ''
    },
    '188': {
        '0': ',',
        '1': '',
        '2': ''
    },
    '189': {
        '0': '-',
        '1': '',
        '2': ''
    },
    '190': {
        '0': '.',
        '1': '',
        '2': ''
    },
    '191': {
        '0': '/',
        '1': '',
        '2': ''
    },
    '192': {
        '0': '~',
        '1': '',
        '2': ''
    },
    '219': {
        '0': '[',
        '1': '',
        '2': ''
    },
    '220': {
        '0': '\\',
        '1': '',
        '2': ''
    },
    '221': {
        '0': ']',
        '1': '',
        '2': ''
    },
    '222': {
        '0': '\'',
        '1': '',
        '2': ''
    },
};