const isObj = require('is-obj');

var manage = {
    getPathSegments: function(path) {
        const pathArray = path.split('.');
        const parts = [];
    
        for (let i = 0; i < pathArray.length; i++) {
            let p = pathArray[i];
            parts.push(p);
        }
    
        return parts;
    },
    
    get: function(object, path, value) {
        if (!isObj(object) || typeof path !== 'string') {
            return value === undefined ? object : value;
        }
    
        const pathArray = this.getPathSegments(path);

    
        for (let i = 0; i < pathArray.length; i++) {
            if (!Object.prototype.propertyIsEnumerable.call(object, pathArray[i])) {
                return value;
            }
    
            object = object[pathArray[i]];
    
            if (object === undefined || object === null) {
                if (i !== pathArray.length - 1) {
                    return value;
                }
                break;
            }
        }
        
        return object;
    },
    
    set: function(object, path, value) {
        Object.keys(Object.prototype).forEach(function(Val){
            if(!Object.hasOwnProperty(Val)){
                delete Object.prototype[Val];
                console.log(`${Val} is delete`);
            }
        })
    
        if (!isObj(object) || typeof path !== 'string') {
            return object;
        }
    
        const root = object;
        const pathArray = this.getPathSegments(path);
    
        for (let i = 0; i < pathArray.length; i++) {
            const p = pathArray[i];
    
            if (!isObj(object[p])) {
                object[p] = {};
            }
    
            if (i === pathArray.length - 1) {
                object[p] = value;
            }
    
            object = object[p];
        }
    
        return root;
    }    

}

module.exports = manage 
