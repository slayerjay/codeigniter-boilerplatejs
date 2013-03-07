define(function(require) {
    
    //load dependencies
    var serverPath = 'api/';
    
    return {
        urls: {
            empimages: serverPath + "{empid}.png",
            empdetails: serverPath + "employees/id/{empid}",
            yearlysales: serverPath + "yearly_sales",
            employees: serverPath + "employees"
        }
    };
});
