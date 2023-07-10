function generate() {
    var doc = new jsPDF('p', 'pt', 'letter');
    var htmlstring = '';
    var tempVarToCheckPageHeight = 0;
    orientation: "landscape"
    var pageHeight = 0;
    pageHeight = doc.internal.pageSize.height;
    specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector  
        '#bypassme': function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"  
            return true
        }
    };
    margins = {
        top: 150,
        bottom: 60,
        left: 100,
        right: 1000,
        width: 600,
    };
    var y = 20;
    doc.setLineWidth(2);
    doc.text(200, y = y + 30, "Users that have logged in");
    doc.autoTable({
        html: '#simple_table',
        startY: 70,
        theme: 'grid',
        columnStyles: {
            0: {
                cellWidth: 80,
            },
            1: {
                cellWidth: 80,
            },
            2: {
                cellWidth: 80,
            },
            3: {
                cellWidth: 100,
            },
            4: {
                cellWidth: 50,
            },
            5: {
                cellWidth: 100,
            }
        },
        styles: {
            minCellHeight: 100
        }
    })
    doc.save('Users.pdf');
}

const hamburger = document.querySelector('.hamburger');
const navLink = document.querySelector('.nav__link');

hamburger.addEventListener('click', () => {
  navLink.classList.toggle('hide');
});