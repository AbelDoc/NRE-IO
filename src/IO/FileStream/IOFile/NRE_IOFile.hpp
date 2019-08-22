
    /**
     * @file NRE_IOFile.hpp
     * @brief Declaration of Engine's IO's Object : IOFile
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

     #pragma once

    #include "../NRE_FileStream.hpp"
    #include "../Input/Stream/NRE_InputStream.hpp"
    #include "../Output/Stream/NRE_OutputStream.hpp"

     /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace IO
         * @brief IO's API
         */
        namespace IO {

            /**
             * @class IOFile
             * @brief Manage Input-Output file stream
             */
            class IOFile : public FileStream, public InputStream, public OutputStream {
                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default Constructor
                         */
                        IOFile() = delete;
                        /**
                         * Construct an IO file stream with a given file's path
                         * @param p the file's stream path
                         */
                        IOFile(File const& p);

                    //## Move-Constructor ##//
                        /**
                         * Move f into this
                         * @param f the io file to move
                         */
                        IOFile(IOFile && f) = default;

                    //## Deconstructor ##//
                        /**
                         * IOFile Deconstructor
                         */
                        virtual ~IOFile() = default;

                    //## Getter ##//
                        /**
                         * @return the IO file stream opening mode
                         */
                        virtual std::ios_base::openmode getMode() const override;
                        /**
                         * @return the IO file's stream
                         */
                        virtual std::fstream& getStream() override;

                    //## Assignment Operator ##//
                        /**
                         * Move assignment of f into this
                         * @param f the io file to move
                         * @return  the reference of himself
                         */
                        IOFile& operator =(IOFile && f) = default;

            };
        }
    }

    #include "NRE_IOFile.tpp"
