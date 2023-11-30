var BASE_URL = '';

if (window.location.hostname === 'localhost' && window.location.port === '8000') {
    BASE_URL = '';
} else if (window.location.hostname === '13.200.127.39') {
    BASE_URL = 'http://13.200.127.39/Healthcare-Management-System/public';
} else {
    BASE_URL = 'http://localhost/hms/public';
}