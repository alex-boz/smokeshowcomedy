// Site Constants
const c = {
    siteInfo: './data/ssc_site_data.json'
}

// DOM
const el = {
    info: document.getElementById('info'),
    header: document.querySelector('header'),
    section: document.querySelector('section'),
    footer: document.querySelector('footer')
}

/*
    -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
    * FUNCTION DECLARATTIONS
    -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_
*/

const init = async () => {
    const instaFeed = await getInstaPosts();

    const siteData = await getSiteData();
    const siteAbout = siteData.about;
    const siteSocial = siteData.social;

    await setHeader(siteData);
    await setAbout(siteAbout);

    if( Object.keys(instaFeed).length > 3 ){
       await setInstaFeed(instaFeed);
    }

    setSocial(siteSocial);
}

const getSiteData = async () => {
    return fetch(c.siteInfo)
            .then((res) => res.json())
            .catch(error => {
                console.log(error);
                return false;
            })
}

const setHeader = async (siteData) => {
    setInfo(siteData.info);
    setLogo();
}

const setInfo = (showInfo) => {
    const infoWrapper = document.createElement('div');
    infoWrapper.id = 'info';

    infoWrapper.innerHTML += `${showInfo.when} | `;
    infoWrapper.innerHTML += `${showInfo.time} | `;
    infoWrapper.innerHTML += `${showInfo.address}`;

    el.header.append(infoWrapper);
}

const setLogo = () => {
    const logo = document.createElement('div');
    logo.id = 'logo';

    el.header.append(logo);
}

const setAbout = async (siteAbout) => {
    const aboutWrap = document.createElement('div');
    aboutWrap.id = 'about';
    aboutWrap.classList.add('section-wrapper');
    aboutWrap.classList.add('about-wrapper');
    aboutWrap.setAttribute('data-aos', 'fade-up');

    const aboutHeader = document.createElement('h2');
    aboutHeader.innerText = 'About the Show';

    const aboutDesc = document.createElement('div');
    aboutDesc.id = 'about-inner-wrapper';
    aboutDesc.classList.add('section-inner-wrapper');
    aboutDesc.innerHTML = siteAbout;

    aboutWrap.append(aboutHeader);
    aboutWrap.append(aboutDesc);

    el.section.append(aboutWrap);
}

const setInstaFeed = async (instaFeed) => {
    const instaWrap = document.createElement('div');
    instaWrap.id = 'insta-wrapper';
    instaWrap.setAttribute('data-aos', 'fade-up');

    const instaHeader = document.createElement('h3');
    instaHeader.innerText = '~ Look At How Fun We Are ~';

    const instaSubHeader = document.createElement('div');
    instaSubHeader.id = 'insta-sub-header';
    instaSubHeader.innerText = 'You should come to a show!';

    const instaInnerWrap = document.createElement('div');
    instaInnerWrap.id = 'insta-inner-wrapper';

    instaWrap.append(instaHeader);
    instaWrap.append(instaSubHeader);
    instaWrap.append(instaInnerWrap);

    for( let i = 0; i < 3; i++ ){
        const instaPostWrap = document.createElement('div');
        instaPostWrap.classList.add('insta-post-wrapper');

        const instaImg = document.createElement('img');
        instaImg.setAttribute('crossorigin', 'anonymous');
        instaImg.src = instaFeed[i].node.display_url;

        const instaPost = document.createElement('div');
        instaPost.classList.add('insta-post-caption');
        instaPost.innerText = instaFeed[i].node.edge_media_to_caption.edges[0].node.text;

        instaPostWrap.append(instaImg);
        instaPostWrap.append(instaPost);
        instaInnerWrap.append(instaPostWrap);
    }

    el.section.append(instaWrap);
}

const setSocial = (siteSocial) => {
    const socialWrapper = document.createElement('div');
    socialWrapper.id = 'social-wrapper';

    for(let i in siteSocial){
        if( siteSocial[i] != null ){
            
        }
    }
}

const getInstaPosts = async () => {
    const url = 'https://instagram130.p.rapidapi.com/account-feed?username=alexbozinovic';
    const options = {
    	method: 'GET',
    	headers: {
    		'X-RapidAPI-Key': 'ea110f95e4msh0041297aaeee756p1e2a87jsn59c5b7f3f03d',
    		'X-RapidAPI-Host': 'instagram130.p.rapidapi.com'
    	}
    };

    return fetch(url, options)
            .then(res => res.json())
            .catch(error => {
                console.log(error);
            });
}

/* -_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_ */
init();