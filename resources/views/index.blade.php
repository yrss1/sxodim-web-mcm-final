<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/styles.css" />
    <link
        rel="icon"
        type="image/x-icon"
        href="images/black-icon-transformed.png"
    />
    <link
        href="https://fonts.googleapis.com/css?family=Poppins"
        rel="stylesheet"
    />
    <title>E-bus</title>
</head>
<body>
<div class="container">
    <div class="navbar">
        <div class="navbar-left">
            <div>
                <a>
                    <img src="icons/icon.png" alt="icon" class="icon">
                </a>
            </div>
            <div><p>Алматы</p></div>
        </div>
        <div class="navbar-right">
            <div><p>Русский</p></div>
            <div class="impression-icon favorites-icon">
                <a href="#"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="#favorite"></use>
                    </svg></a>
            </div>
            <div class="impression-icon tickets-icon">
                <a href="#"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="#ticket"></use>
                    </svg></a>
            </div>
            <div class="impression-icon user-icon">
                <a href="#"><svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="#account"></use>
                    </svg></a>
            </div>
        </div>
    </div>
</div>
<svg version="1.1" width="0" height="0" style="position: absolute;">
    <symbol id="location" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 12C10.9 12 10 11.1 10 10C10 8.9 10.9 8 12 8C13.1 8 14 8.9 14 10C14 11.1 13.1 12 12 12ZM18 10.2C18 6.57 15.35 4 12 4C8.65 4 6 6.57 6 10.2C6 12.54 7.95 15.64 12 19.34C16.05 15.64 18 12.54 18 10.2ZM12 2C16.2 2 20 5.22 20 10.2C20 13.52 17.33 17.45 12 22C6.67 17.45 4 13.52 4 10.2C4 5.22 7.8 2 12 2Z"></path>
    </symbol>

    <symbol id="favorite" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.5 3C14.76 3 13.09 3.81 12 5.09C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.42 2 8.5C2 12.28 5.4 15.36 10.55 20.04L12 21.35L13.45 20.03C18.6 15.36 22 12.28 22 8.5C22 5.42 19.58 3 16.5 3ZM12.1 18.55L12 18.65L11.9 18.55C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5C9.04 5 10.54 5.99 11.07 7.36H12.94C13.46 5.99 14.96 5 16.5 5C18.5 5 20 6.5 20 8.5C20 11.39 16.86 14.24 12.1 18.55Z"></path>
    </symbol>
    <symbol id="event" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M17 13H12V18H17V13ZM16 2V4H8V2H6V4H3.01L3 22H21V4H18V2H16ZM19 20H5V9H19V20Z"></path>
    </symbol>

    <symbol id="account" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM7.07 18.28C7.5 17.38 10.12 16.5 12 16.5C13.88 16.5 16.51 17.38 16.93 18.28C15.57 19.36 13.86 20 12 20C10.14 20 8.43 19.36 7.07 18.28ZM18.36 16.83C16.93 15.09 13.46 14.5 12 14.5C10.54 14.5 7.07 15.09 5.64 16.83C4.62 15.49 4 13.82 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 13.82 19.38 15.49 18.36 16.83ZM12 6C10.06 6 8.5 7.56 8.5 9.5C8.5 11.44 10.06 13 12 13C13.94 13 15.5 11.44 15.5 9.5C15.5 7.56 13.94 6 12 6ZM12 11C11.17 11 10.5 10.33 10.5 9.5C10.5 8.67 11.17 8 12 8C12.83 8 13.5 8.67 13.5 9.5C13.5 10.33 12.83 11 12 11Z"></path>
    </symbol>
    <symbol id="ticket" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M22 10V6C22 4.89 21.1 4 20 4H4C2.9 4 2.01 4.89 2.01 6V10C3.11 10 4 10.9 4 12C4 13.1 3.11 14 2 14V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V14C20.9 14 20 13.1 20 12C20 10.9 20.9 10 22 10ZM20 8.54C18.81 9.23 18 10.53 18 12C18 13.47 18.81 14.77 20 15.46V18H4V15.46C5.19 14.77 6 13.47 6 12C6 10.52 5.2 9.23 4.01 8.54L4 6H20V8.54ZM11 15H13V17H11V15ZM11 11H13V13H11V11ZM11 7H13V9H11V7Z"></path>
    </symbol>

    <symbol id="search-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.5 14H14.71L14.43 13.73C15.41 12.59 16 11.11 16 9.5C16 5.91 13.09 3 9.5 3C5.91 3 3 5.91 3 9.5C3 13.09 5.91 16 9.5 16C11.11 16 12.59 15.41 13.73 14.43L14 14.71V15.5L19 20.49L20.49 19L15.5 14ZM9.5 14C7.01 14 5 11.99 5 9.5C5 7.01 7.01 5 9.5 5C11.99 5 14 7.01 14 9.5C14 11.99 11.99 14 9.5 14Z"></path>
    </symbol>
    <symbol id="newspaper" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M22 3L20.33 4.67L18.67 3L17 4.67L15.33 3L13.67 4.67L12 3L10.33 4.67L8.67 3L7 4.67L5.33 3L3.67 4.67L2 3V19C2 20.1 2.9 21 4 21H20C21.1 21 22 20.1 22 19V3ZM11 19H4V13H11V19ZM20 19H13V17H20V19ZM20 15H13V13H20V15ZM20 11H4V8H20V11Z"></path>
    </symbol>
    <symbol id="close" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path fill="none" d="M0 0h24v24H0z"></path>
        <path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"></path>
    </symbol>
    <symbol id="certificates" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 34.15V39h34v-4.85ZM7 12h6.25q-.25-.45-.4-1.125-.15-.675-.15-1.225 0-2.35 1.65-4T18.3 4q1.55 0 2.85.775T23.2 6.75l.85 1.3.8-1.3q.8-1.25 2.05-2Q28.15 4 29.6 4q2.4 0 4.05 1.625T35.3 9.65q0 .55-.125 1.1T34.8 12H41q1.2 0 2.1.9.9.9.9 2.1v24q0 1.2-.9 2.1-.9.9-2.1.9H7q-1.2 0-2.1-.9Q4 40.2 4 39V15q0-1.2.9-2.1.9-.9 2.1-.9Zm0 16.8h34V15H28.55l5 6.95-2.4 1.8-7.15-9.9-7.15 9.9-2.4-1.8 5-6.95H7Zm11.35-16.5q1.1 0 1.875-.775Q21 10.75 21 9.65t-.775-1.875Q19.45 7 18.35 7t-1.875.775Q15.7 8.55 15.7 9.65t.775 1.875q.775.775 1.875.775Zm11.25 0q1.15 0 1.925-.775.775-.775.775-1.875t-.775-1.875Q30.75 7 29.6 7q-1.05 0-1.825.775Q27 8.55 27 9.65t.775 1.875q.775.775 1.825.775Z"></path>
    </symbol>

    <symbol id="arrow_drop_down" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 10L12 15L17 10H7Z"></path>
    </symbol>

    <symbol id="arrow_right" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.29006 15.88L13.1701 12L9.29006 8.11998C8.90006 7.72998 8.90006 7.09998 9.29006 6.70998C9.68006 6.31998 10.3101 6.31998 10.7001 6.70998L15.2901 11.3C15.6801 11.69 15.6801 12.32 15.2901 12.71L10.7001 17.3C10.3101 17.69 9.68006 17.69 9.29006 17.3C8.91006 16.91 8.90006 16.27 9.29006 15.88Z"></path>
    </symbol>

    <symbol id="arrow_back" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.6201 2.99006C16.1301 2.50006 15.3401 2.50006 14.8501 2.99006L6.54006 11.3001C6.15006 11.6901 6.15006 12.3201 6.54006 12.7101L14.8501 21.0201C15.3401 21.5101 16.1301 21.5101 16.6201 21.0201C17.1101 20.5301 17.1101 19.7401 16.6201 19.2501L9.38006 12.0001L16.6301 4.75006C17.1101 4.27006 17.1101 3.47006 16.6201 2.99006Z"></path>
    </symbol>

    <symbol id="close-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z"></path>
    </symbol>

    <symbol id="calendar" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 3H19V1H17V3H7V1H5V3H4C2.9 3 2 3.9 2 5V21C2 22.1 2.9 23 4 23H20C21.1 23 22 22.1 22 21V5C22 3.9 21.1 3 20 3ZM20 21H4V10H20V21ZM20 8H4V5H20V8Z"></path>
    </symbol>

    <symbol id="facebook-icon" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 2.23858 2.23858 0 5 0H27C29.7614 0 32 2.23858 32 5V27C32 29.7614 29.7614 32 27 32H5C2.23858 32 0 29.7614 0 27V5ZM16 8C20.4 8 24 11.6 24 16C24 20 21.1 23.4 17.1 24V18.3H19L19.4 16H17.2V14.5C17.2 13.9 17.5 13.3 18.5 13.3H19.5V11.3C19.5 11.3 18.6 11.1 17.7 11.1C15.9 11.1 14.7 12.2 14.7 14.2V16H12.7V18.3H14.7V23.9C10.9 23.3 8 20 8 16C8 11.6 11.6 8 16 8Z"></path>
    </symbol>
    <symbol viewBox="0 0 117 64" id="logo" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M52.6845 12.5261V33.1998L60.7835 32.3245C63.2712 32.0564 65.1659 30.9498 66.2308 29.1626C67.2659 27.4236 67.6239 24.5069 66.5728 22.6945C66.3529 22.2992 66.0484 21.9579 65.6813 21.6952C65.3142 21.4325 64.8937 21.2549 64.45 21.1754C67.5601 19.5991 67.7995 14.76 65.362 12.6842C64.298 11.7784 62.6722 11.4439 60.4848 11.6806L52.68 12.5261H52.6845ZM26.5908 51.0483L31.9035 40.4812L25.9364 41.1228L23.6358 46.4659L21.3944 41.6108L15.4228 42.2524L20.6807 51.6853L15.0648 62.9581L21.0341 62.3211L23.7133 56.2311L26.2602 61.746L32.2615 61.0976L26.584 51.0483H26.5908ZM47.3012 51.2454V45.5952C47.3166 44.6213 47.1663 43.6519 46.8565 42.7289C45.7826 39.6862 43.0465 38.9553 40.1028 39.2715C36.4295 39.6679 33.739 41.7322 33.169 45.5151C32.7791 47.8406 32.941 50.4412 32.941 52.7897C32.941 53.6389 32.9752 54.5363 33.0436 55.4818C33.1804 57.3446 34.0195 59.0264 35.7637 59.8352C37.0634 60.4446 38.6527 60.5111 40.1097 60.353C41.4868 60.2399 42.8198 59.8111 44.0064 59.0997C46.8657 57.2919 47.2989 54.3981 47.2989 51.2454H47.3012ZM41.7582 46.1153C41.7582 46.4499 41.7742 46.8027 41.7742 47.1579V53.532C41.7742 54.8609 41.2201 55.5941 40.1188 55.7041C38.2947 55.9034 38.4611 53.8917 38.4611 52.6041V47.5153C38.4611 46.5988 38.3973 45.1233 39.0973 44.4657C39.3786 44.2045 39.7375 44.0435 40.1188 44.0074C40.2929 43.9761 40.4716 43.9803 40.6441 44.0199C40.8166 44.0594 40.9794 44.1335 41.1228 44.2376C41.2663 44.3417 41.3873 44.4738 41.4789 44.626C41.5704 44.7781 41.6305 44.9473 41.6556 45.1233C41.7137 45.4533 41.748 45.7872 41.7582 46.1222V46.1153ZM48.5188 54.8037V61.022L53.8976 60.44V58.7675L62.7239 57.8143V59.5029L68.105 58.921V52.698L66.0666 52.9271V36.7878L52.7051 38.229C52.5728 41.3565 53.063 51.9602 50.2904 54.6135L48.5188 54.8037ZM60.6513 41.62V53.5022L56.3054 53.9605C57.4865 51.4585 57.4842 44.5802 57.6073 41.9385L60.6513 41.62ZM85.8102 55.3329V34.6684L81.0789 35.1771L75.7617 46.0214L75.732 35.743L70.2597 36.3319V56.9986L75.0799 56.4854L80.2832 46.0993L80.3151 55.9263L85.8102 55.3329ZM107.864 52.9546V32.3062L102.27 32.9065L98.2916 41.8422L94.3014 33.7657L88.7971 34.3568V55.0122L94.2079 54.4279V44.4794L97.3066 49.6095L99.5388 49.3666L102.455 43.6775V53.5297L107.864 52.9478V52.9546ZM26.0208 36.0432V37.7318L31.4019 37.1498V30.9314L29.3634 31.1606V15.0144L16.0019 16.4578C15.8697 19.5853 16.3599 30.1868 13.5873 32.8423L11.8156 33.0325V39.26L17.1944 38.6781V36.994L26.0208 36.0432ZM23.9527 19.8488V31.7288L19.6091 32.1985C20.7902 29.6942 20.7879 22.8182 20.911 20.1765L23.955 19.8488H23.9527ZM116.97 47.4397L111.592 48.0194V52.5651L116.97 51.9832V47.4397ZM111.535 31.9052L111.888 46.2986L116.676 45.7808L117 31.3187L111.528 31.9052H111.535ZM14.3648 50.3381V49.1489C14.3806 48.1753 14.2318 47.2061 13.9247 46.2826C13.6647 45.4697 13.1992 44.7385 12.5738 44.1606C11.9483 43.5827 11.1842 43.1778 10.3563 42.9855C7.83451 42.3234 4.27979 43.0176 2.37589 44.8185C0.396742 46.7179 0 49.346 0 51.9488V56.3456C0 57.1964 0.0342019 58.0931 0.102606 59.0355C0.253094 61.0747 1.21075 62.7817 3.17165 63.5469C5.41985 64.4268 8.99737 63.9708 11.0746 62.6488C11.9574 62.0799 12.6996 61.3162 13.2444 60.4157C13.7893 59.5152 14.1226 58.5017 14.2189 57.4523C14.3143 56.5964 14.363 55.7359 14.3648 54.8747L8.83776 55.4727V57.0765C8.83776 58.4077 8.28369 59.1386 7.18239 59.2509C5.35829 59.4502 5.52474 57.4386 5.52474 56.1509V51.0644C5.52474 50.1479 5.46318 48.6724 6.1609 48.0148C6.6876 47.5245 7.57685 47.3434 8.18793 47.7856C8.75796 48.1935 8.80356 49.016 8.8218 49.6644C8.8218 50.0906 8.83776 50.5122 8.83776 50.9361L14.3648 50.3381ZM90.9769 5.59745L99.6802 4.54349V0L90.9769 5.59745ZM87.5568 8.77995V29.4376L92.4066 28.9175L97.5802 18.5841L97.6075 28.3584L103.107 27.7673V7.10278L98.376 7.61372L93.0519 18.5085L93.0199 8.19798L87.5476 8.78911L87.5568 8.77995ZM38.7621 14.0108L33.0071 35.2848L38.7347 34.6707L39.5123 31.0231L44.2139 30.5167L45.021 33.9948L50.7214 33.3831L44.9891 13.3372L38.7621 14.0108ZM43.1878 26.1543L40.5566 26.4384L41.8904 20.0848L43.1878 26.1543ZM73.7689 10.2624L68.0161 31.5432L73.746 30.9314L74.5281 27.2655L79.2297 26.7591L80.0324 30.2441L85.7327 29.63L80.005 9.58875L73.7689 10.2624ZM78.1946 22.3783L75.5633 22.6624L76.8972 16.3112L78.1946 22.3783ZM58.2138 28.1064V24.0578C58.7013 23.988 59.1923 23.946 59.6845 23.9318C61.992 23.9524 62.0102 26.5529 60.9044 27.4076C60.1383 27.9987 59.1396 28.0262 58.2161 28.1293L58.2138 28.1064ZM60.7699 19.1088C60.1063 19.6609 59.0461 19.6678 58.2116 19.7595V16.412L59.306 16.2951C61.6933 16.0385 61.7093 18.3504 60.7699 19.1202V19.1088Z"></path>
    </symbol>
    <symbol id="vk-icon" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 2.23858 2.23858 0 5 0H27C29.7614 0 32 2.23858 32 5V27C32 29.7614 29.7614 32 27 32H5C2.23858 32 0 29.7614 0 27V5ZM9.12 9.12C8 10.2507 8 12.0587 8 15.68V16.32C8 19.936 8 21.744 9.12 22.88C10.2507 24 12.0587 24 15.68 24H16.32C19.936 24 21.744 24 22.88 22.88C24 21.7493 24 19.9413 24 16.32V15.68C24 12.064 24 10.256 22.88 9.12C21.7493 8 19.9413 8 16.32 8H15.68C12.064 8 10.256 8 9.12 9.12Z"></path>
        <path d="M16.512 19.5253C12.864 19.5253 10.784 17.0293 10.6987 12.8693H12.5333C12.592 15.92 13.936 17.2106 15.0027 17.4773V12.8693H16.7253V15.4986C17.776 15.3866 18.8853 14.1866 19.2587 12.864H20.976C20.836 13.5487 20.5563 14.1971 20.1543 14.7688C19.7524 15.3405 19.2369 15.8232 18.64 16.1866C19.3061 16.5182 19.8943 16.9872 20.366 17.5626C20.8376 18.1381 21.1818 18.8071 21.376 19.5253H19.4827C19.0773 18.2613 18.064 17.28 16.7253 17.1467V19.5253H16.512Z"></path>
    </symbol>

    <symbol id="telegram-icon" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 0H27C29.7614 0 32 2.23858 32 5V27C32 29.7614 29.7614 32 27 32H5C2.23858 32 0 29.7614 0 27V5C0 2.23858 2.23858 0 5 0ZM16.6919 12.0074C15.2589 12.6034 12.3949 13.8371 8.09992 15.7083C7.40248 15.9856 7.03714 16.257 7.00388 16.5223C6.94767 16.9706 7.50915 17.1472 8.27374 17.3876C8.37774 17.4203 8.4855 17.4542 8.59598 17.4901C9.34822 17.7346 10.3601 18.0207 10.8862 18.0321C11.3633 18.0424 11.8959 17.8457 12.4839 17.4419C16.4968 14.7331 18.5683 13.3639 18.6983 13.3344C18.7901 13.3136 18.9172 13.2874 19.0034 13.3639C19.0895 13.4405 19.0811 13.5855 19.0719 13.6244C19.0163 13.8615 16.8123 15.9106 15.6717 16.971C15.3161 17.3015 15.0639 17.536 15.0124 17.5896C14.8969 17.7096 14.7791 17.823 14.666 17.9321C13.9672 18.6058 13.4431 19.111 14.695 19.936C15.2967 20.3325 15.7781 20.6603 16.2584 20.9874C16.7829 21.3446 17.306 21.7009 17.9829 22.1446C18.1554 22.2576 18.3201 22.375 18.4805 22.4894C19.0909 22.9246 19.6393 23.3155 20.3168 23.2532C20.7105 23.217 21.1172 22.8468 21.3237 21.7427C21.8118 19.1335 22.7712 13.4801 22.9929 11.1505C23.0123 10.9464 22.9879 10.6851 22.9683 10.5705C22.9486 10.4558 22.9076 10.2924 22.7586 10.1715C22.582 10.0283 22.3095 9.99805 22.1877 10.0001C21.6335 10.01 20.7834 10.3056 16.6919 12.0074Z"></path>
    </symbol>

    <symbol id="instagram-icon" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
        <path d="M16 18.8C14.5 18.8 13.2 17.6 13.2 16C13.2 14.5 14.4 13.2 16 13.2C17.5 13.2 18.8 14.4 18.8 16C18.8 17.5 17.5 18.8 16 18.8Z"></path>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4 9.2H12.6C11.8 9.3 11.4 9.4 11.1 9.5C10.7 9.6 10.4 9.8 10.1 10.1C9.86261 10.3374 9.75045 10.5748 9.61489 10.8617C9.57916 10.9373 9.5417 11.0166 9.5 11.1C9.48453 11.1464 9.46667 11.1952 9.44752 11.2475C9.34291 11.5333 9.2 11.9238 9.2 12.6V19.4C9.3 20.2 9.4 20.6 9.5 20.9C9.6 21.3 9.8 21.6 10.1 21.9C10.3374 22.1374 10.5748 22.2495 10.8617 22.3851C10.9374 22.4209 11.0165 22.4583 11.1 22.5C11.1464 22.5155 11.1952 22.5333 11.2475 22.5525C11.5333 22.6571 11.9238 22.8 12.6 22.8H19.4C20.2 22.7 20.6 22.6 20.9 22.5C21.3 22.4 21.6 22.2 21.9 21.9C22.1374 21.6626 22.2495 21.4252 22.3851 21.1383C22.4209 21.0626 22.4583 20.9835 22.5 20.9C22.5155 20.8536 22.5333 20.8048 22.5525 20.7525C22.6571 20.4667 22.8 20.0762 22.8 19.4V12.6C22.7 11.8 22.6 11.4 22.5 11.1C22.4 10.7 22.2 10.4 21.9 10.1C21.6626 9.86261 21.4252 9.75045 21.1383 9.61488C21.0627 9.57918 20.9833 9.54167 20.9 9.5C20.8536 9.48453 20.8048 9.46666 20.7525 9.44752C20.4667 9.3429 20.0762 9.2 19.4 9.2ZM16 11.7C13.6 11.7 11.7 13.6 11.7 16C11.7 18.4 13.6 20.3 16 20.3C18.4 20.3 20.3 18.4 20.3 16C20.3 13.6 18.4 11.7 16 11.7ZM21.4 11.6C21.4 12.1523 20.9523 12.6 20.4 12.6C19.8477 12.6 19.4 12.1523 19.4 11.6C19.4 11.0477 19.8477 10.6 20.4 10.6C20.9523 10.6 21.4 11.0477 21.4 11.6Z"></path>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5C0 2.23858 2.23858 0 5 0H27C29.7614 0 32 2.23858 32 5V27C32 29.7614 29.7614 32 27 32H5C2.23858 32 0 29.7614 0 27V5ZM12.6 7.7H19.4C20.3 7.8 20.9 7.9 21.4 8.1C22 8.4 22.4 8.6 22.9 9.1C23.4 9.6 23.7 10.1 23.9 10.6C24.1 11.1 24.3 11.7 24.3 12.6V19.4C24.2 20.3 24.1 20.9 23.9 21.4C23.6 22 23.4 22.4 22.9 22.9C22.4 23.4 21.9 23.7 21.4 23.9C20.9 24.1 20.3 24.3 19.4 24.3H12.6C11.7 24.2 11.1 24.1 10.6 23.9C10 23.6 9.6 23.4 9.1 22.9C8.6 22.4 8.3 21.9 8.1 21.4C7.9 20.9 7.7 20.3 7.7 19.4V12.6C7.8 11.7 7.9 11.1 8.1 10.6C8.4 10 8.6 9.6 9.1 9.1C9.6 8.6 10.1 8.3 10.6 8.1C11.1 7.9 11.7 7.7 12.6 7.7Z"></path>
    </symbol>

    <symbol id="envelope-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6ZM20 6L12 10.99L4 6H20ZM20 18H4V8L12 13L20 8V18Z"></path>
    </symbol>

    <symbol id="loading-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 4V1L8 5L12 9V6C15.31 6 18 8.69 18 12C18 13.01 17.75 13.97 17.3 14.8L18.76 16.26C19.54 15.03 20 13.57 20 12C20 7.58 16.42 4 12 4ZM12 18C8.69 18 6 15.31 6 12C6 10.99 6.25 10.03 6.7 9.2L5.24 7.74C4.46 8.97 4 10.43 4 12C4 16.42 7.58 20 12 20V23L16 19L12 15V18Z"></path>
    </symbol>
    <symbol id="heart-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 21.175L10.55 19.855C5.4 15.185 2 12.105 2 8.32495C2 5.24495 4.42 2.82495 7.5 2.82495C9.24 2.82495 10.91 3.63495 12 4.91495C13.09 3.63495 14.76 2.82495 16.5 2.82495C19.58 2.82495 22 5.24495 22 8.32495C22 12.105 18.6 15.185 13.45 19.865L12 21.175Z"></path>
        <path id="heart-icon-stroke" d="M16.5 3C14.76 3 13.09 3.81 12 5.09C10.91 3.81 9.24 3 7.5 3C4.42 3 2 5.42 2 8.5C2 12.28 5.4 15.36 10.55 20.04L12 21.35L13.45 20.03C18.6 15.36 22 12.28 22 8.5C22 5.42 19.58 3 16.5 3ZM12.1 18.55L12 18.65L11.9 18.55C7.14 14.24 4 11.39 4 8.5C4 6.5 5.5 5 7.5 5C9.04 5 10.54 5.99 11.07 7.36H12.94C13.46 5.99 14.96 5 16.5 5C18.5 5 20 6.5 20 8.5C20 11.39 16.86 14.24 12.1 18.55Z" fill="white"></path>
    </symbol>

    <symbol id="eye-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 6.5C15.79 6.5 19.17 8.63 20.82 12C19.17 15.37 15.8 17.5 12 17.5C8.2 17.5 4.83 15.37 3.18 12C4.83 8.63 8.21 6.5 12 6.5ZM12 4.5C7 4.5 2.73 7.61 1 12C2.73 16.39 7 19.5 12 19.5C17 19.5 21.27 16.39 23 12C21.27 7.61 17 4.5 12 4.5ZM12 9.5C13.38 9.5 14.5 10.62 14.5 12C14.5 13.38 13.38 14.5 12 14.5C10.62 14.5 9.5 13.38 9.5 12C9.5 10.62 10.62 9.5 12 9.5ZM12 7.5C9.52 7.5 7.5 9.52 7.5 12C7.5 14.48 9.52 16.5 12 16.5C14.48 16.5 16.5 14.48 16.5 12C16.5 9.52 14.48 7.5 12 7.5Z"></path>
    </symbol>

    <symbol id="qr-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.5 6.5V9.5H6.5V6.5H9.5ZM11 5H5V11H11V5ZM9.5 14.5V17.5H6.5V14.5H9.5ZM11 13H5V19H11V13ZM17.5 6.5V9.5H14.5V6.5H17.5ZM19 5H13V11H19V5ZM13 13H14.5V14.5H13V13ZM14.5 14.5H16V16H14.5V14.5ZM16 13H17.5V14.5H16V13ZM13 16H14.5V17.5H13V16ZM14.5 17.5H16V19H14.5V17.5ZM16 16H17.5V17.5H16V16ZM17.5 14.5H19V16H17.5V14.5ZM17.5 17.5H19V19H17.5V17.5ZM22 7H20V4H17V2H22V7ZM22 22V17H20V20H17V22H22ZM2 22H7V20H4V17H2V22ZM2 2V7H4V4H7V2H2Z"></path>
    </symbol>

    <symbol id="list-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M11 7H17V9H11V7ZM11 11H17V13H11V11ZM11 15H17V17H11V15ZM7 7H9V9H7V7ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM20.1 3H3.9C3.4 3 3 3.4 3 3.9V20.1C3 20.5 3.4 21 3.9 21H20.1C20.5 21 21 20.5 21 20.1V3.9C21 3.4 20.5 3 20.1 3ZM19 19H5V5H19V19Z"></path>
    </symbol>

    <symbol id="chart-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M3.5 18.4898L9.5 12.4798L13.5 16.4798L22 6.91977L20.59 5.50977L13.5 13.4798L9.5 9.47976L2 16.9898L3.5 18.4898Z"></path>
    </symbol>

    <symbol id="settings-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M19.4322 12.98C19.4722 12.66 19.5022 12.34 19.5022 12C19.5022 11.66 19.4722 11.34 19.4322 11.02L21.5422 9.37C21.7322 9.22 21.7822 8.95 21.6622 8.73L19.6622 5.27C19.5722 5.11 19.4022 5.02 19.2222 5.02C19.1622 5.02 19.1022 5.03 19.0522 5.05L16.5622 6.05C16.0422 5.65 15.4822 5.32 14.8722 5.07L14.4922 2.42C14.4622 2.18 14.2522 2 14.0022 2H10.0022C9.75216 2 9.54216 2.18 9.51216 2.42L9.13216 5.07C8.52216 5.32 7.96216 5.66 7.44216 6.05L4.95216 5.05C4.89216 5.03 4.83216 5.02 4.77216 5.02C4.60216 5.02 4.43216 5.11 4.34216 5.27L2.34216 8.73C2.21216 8.95 2.27216 9.22 2.46216 9.37L4.57216 11.02C4.53216 11.34 4.50216 11.67 4.50216 12C4.50216 12.33 4.53216 12.66 4.57216 12.98L2.46216 14.63C2.27216 14.78 2.22216 15.05 2.34216 15.27L4.34216 18.73C4.43216 18.89 4.60216 18.98 4.78216 18.98C4.84216 18.98 4.90216 18.97 4.95216 18.95L7.44216 17.95C7.96216 18.35 8.52216 18.68 9.13216 18.93L9.51216 21.58C9.54216 21.82 9.75216 22 10.0022 22H14.0022C14.2522 22 14.4622 21.82 14.4922 21.58L14.8722 18.93C15.4822 18.68 16.0422 18.34 16.5622 17.95L19.0522 18.95C19.1122 18.97 19.1722 18.98 19.2322 18.98C19.4022 18.98 19.5722 18.89 19.6622 18.73L21.6622 15.27C21.7822 15.05 21.7322 14.78 21.5422 14.63L19.4322 12.98ZM17.4522 11.27C17.4922 11.58 17.5022 11.79 17.5022 12C17.5022 12.21 17.4822 12.43 17.4522 12.73L17.3122 13.86L18.2022 14.56L19.2822 15.4L18.5822 16.61L17.3122 16.1L16.2722 15.68L15.3722 16.36C14.9422 16.68 14.5322 16.92 14.1222 17.09L13.0622 17.52L12.9022 18.65L12.7022 20H11.3022L10.9522 17.52L9.89216 17.09C9.46216 16.91 9.06216 16.68 8.66216 16.38L7.75216 15.68L6.69216 16.11L5.42216 16.62L4.72216 15.41L5.80216 14.57L6.69216 13.87L6.55216 12.74C6.52216 12.43 6.50216 12.2 6.50216 12C6.50216 11.8 6.52216 11.57 6.55216 11.27L6.69216 10.14L5.80216 9.44L4.72216 8.6L5.42216 7.39L6.69216 7.9L7.73216 8.32L8.63216 7.64C9.06216 7.32 9.47216 7.08 9.88216 6.91L10.9422 6.48L11.1022 5.35L11.3022 4H12.6922L13.0422 6.48L14.1022 6.91C14.5322 7.09 14.9322 7.32 15.3322 7.62L16.2422 8.32L17.3022 7.89L18.5722 7.38L19.2722 8.59L18.2022 9.44L17.3122 10.14L17.4522 11.27ZM12.0022 8C9.79216 8 8.00216 9.79 8.00216 12C8.00216 14.21 9.79216 16 12.0022 16C14.2122 16 16.0022 14.21 16.0022 12C16.0022 9.79 14.2122 8 12.0022 8ZM12.0022 14C10.9022 14 10.0022 13.1 10.0022 12C10.0022 10.9 10.9022 10 12.0022 10C13.1022 10 14.0022 10.9 14.0022 12C14.0022 13.1 13.1022 14 12.0022 14Z"></path>
    </symbol>

    <symbol id="logout-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M17 8L15.59 9.41L17.17 11H9V13H17.17L15.59 14.58L17 16L21 12L17 8ZM5 5H12V3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H12V19H5V5Z"></path>
    </symbol>

    <symbol id="shield-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M16 15.62C16.6186 15.62 17.12 15.1186 17.12 14.5C17.12 13.8814 16.6186 13.38 16 13.38C15.3814 13.38 14.88 13.8814 14.88 14.5C14.88 15.1186 15.3814 15.62 16 15.62Z"></path>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 16.5C15.27 16.5 13.81 16.86 13.76 17.58C14.26 18.29 15.08 18.75 16 18.75C16.92 18.75 17.74 18.29 18.24 17.58C18.19 16.86 16.73 16.5 16 16.5Z"></path>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M17 10.09V5.27L9.5 2L2 5.27V10.18C2 14.72 5.2 18.97 9.5 20C10.05 19.87 10.58 19.68 11.1 19.45C12.18 20.99 13.97 22 16 22C19.31 22 22 19.31 22 16C22 13.03 19.84 10.57 17 10.09ZM10 16C10 16.56 10.08 17.11 10.23 17.62C9.99 17.73 9.75 17.84 9.5 17.92C6.33 16.92 4 13.68 4 10.18V6.58L9.5 4.18L15 6.58V10.09C12.16 10.57 10 13.03 10 16ZM16 20C13.79 20 12 18.21 12 16C12 13.79 13.79 12 16 12C18.21 12 20 13.79 20 16C20 18.21 18.21 20 16 20Z"></path>
    </symbol>

</svg>
</body>
</html>
